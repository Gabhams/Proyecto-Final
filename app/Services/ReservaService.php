<?php

namespace App\Services;

use App\Models\Reserva;
use App\Models\Habitacion;
use Carbon\Carbon;

class ReservaService
{
    public function validarOverbooking(
        $habitacionId,
        $fechaInicio,
        $fechaFin,
        $ignorarReservaId = null
    ): bool {

        $query = Reserva::where('habitacion_id', $habitacionId)

            ->whereIn('estado', ['pendiente', 'confirmada'])

            ->where(function ($query) use ($fechaInicio, $fechaFin) {

                $query->whereBetween('fecha_inicio', [$fechaInicio, $fechaFin])

                    ->orWhereBetween('fecha_fin', [$fechaInicio, $fechaFin])

                    ->orWhere(function ($q) use ($fechaInicio, $fechaFin) {

                        $q->where('fecha_inicio', '<=', $fechaInicio)
                          ->where('fecha_fin', '>=', $fechaFin);

                    });
            });

        if ($ignorarReservaId) {
            $query->where('id', '!=', $ignorarReservaId);
        }

        return $query->exists();
    }

    public function crear(array $data)
    {
        // VALIDAR OVERBOOKING
        if ($this->validarOverbooking(
            $data['habitacion_id'],
            $data['fecha_inicio'],
            $data['fecha_fin']
        )) {

            throw new \Exception(
                'La habitación ya está reservada en esas fechas'
            );
        }

        // OBTENER HABITACIÓN
        $habitacion = Habitacion::findOrFail(
            $data['habitacion_id']
        );

        // CALCULAR DÍAS
        $inicio = Carbon::parse($data['fecha_inicio']);
        $fin = Carbon::parse($data['fecha_fin']);

        $dias = $inicio->diffInDays($fin);

        // CALCULAR PRECIO TOTAL
        $data['precio_total'] =
            $dias * $habitacion->precio_noche;

        // CREAR RESERVA
        return Reserva::create($data);
    }
}