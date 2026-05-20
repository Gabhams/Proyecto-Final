<?php

namespace App\Services;

use App\Models\Habitacion;

class HabitacionService
{
    public function crear(array $data)
    {
        return Habitacion::create($data);
    }

    public function actualizar(Habitacion $habitacion, array $data)
    {
        $habitacion->fill($data);
        $habitacion->save();

        return $habitacion;
    }

    public function eliminar(Habitacion $habitacion)
    {
        return $habitacion->delete();
    }
}