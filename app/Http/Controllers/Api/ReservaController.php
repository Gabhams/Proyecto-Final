<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reserva;
use Illuminate\Http\Request;

use App\Services\ReservaService;
use App\Http\Requests\StoreReservaRequest;
use App\Http\Resources\ReservaResource;
use App\Http\Requests\UpdateReservaRequest;

class ReservaController extends Controller
{
    protected $reservaService;

    public function __construct(ReservaService $reservaService)
    {
        $this->reservaService = $reservaService;
    }

    /*
    |--------------------------------------------------------------------------
    | LISTAR RESERVAS
    |--------------------------------------------------------------------------
    */
    public function index(Request $request)
    {
        $query = Reserva::query();

        // filtro por estado
        if ($request->has('estado')) {
            $query->where('estado', $request->estado);
        }

        return ReservaResource::collection(
            $query->paginate(10)
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CREAR RESERVA
    |--------------------------------------------------------------------------
    */
    public function store(StoreReservaRequest $request)
    {
        $reserva = $this->reservaService->crear(
            $request->validated()
        );

        return new ReservaResource($reserva);
    }

    /*
    |--------------------------------------------------------------------------
    | MOSTRAR UNA RESERVA
    |--------------------------------------------------------------------------
    */
    public function show(Reserva $reserva)
    {
        return new ReservaResource($reserva);
    }

    /*
    |--------------------------------------------------------------------------
    | ACTUALIZAR RESERVA (PUT FIXED)
    |--------------------------------------------------------------------------
    */
    public function update(UpdateReservaRequest $request, Reserva $reserva)
    {
        $data = $request->validated();

        // VALIDACIÓN OVERBOOKING (solo si se cambian datos clave)
        if (
            isset($data['habitacion_id']) &&
            isset($data['fecha_inicio']) &&
            isset($data['fecha_fin'])
        ) {
            $existe = $this->reservaService->validarOverbooking(
                $data['habitacion_id'],
                $data['fecha_inicio'],
                $data['fecha_fin'],
                $reserva->id
            );

            if ($existe) {
                return response()->json([
                    'message' => 'La habitación ya está reservada en esas fechas'
                ], 422);
            }
        }

        $reserva->update($data);

        return new ReservaResource($reserva);
    }

    /*
    |--------------------------------------------------------------------------
    | ELIMINAR RESERVA
    |--------------------------------------------------------------------------
    */
    public function destroy(Reserva $reserva)
    {
        $reserva->delete();

        return response()->json([
            'message' => 'Reserva eliminada correctamente'
        ]);
    }
}
