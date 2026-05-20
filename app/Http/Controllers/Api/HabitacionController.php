<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Habitacion;
use Illuminate\Http\Request;

use App\Services\HabitacionService;
use App\Http\Requests\StoreHabitacionRequest;
use App\Http\Requests\UpdateHabitacionRequest;
use App\Http\Resources\HabitacionResource;

class HabitacionController extends Controller
{
    protected $habitacionService;

    public function __construct(HabitacionService $habitacionService)
    {
        $this->habitacionService = $habitacionService;
    }

    /*
    |--------------------------------------------------------------------------
    | LISTAR
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $query = Habitacion::query();

        if ($request->has('capacidad')) {
            $query->where('capacidad', $request->capacidad);
        }

        if ($request->has('precio_max')) {
            $query->where('precio_noche', '<=', $request->precio_max);
        }

        return HabitacionResource::collection(
            $query->paginate(10)
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CREAR
    |--------------------------------------------------------------------------
    */

    public function store(StoreHabitacionRequest $request)
    {
        $habitacion = $this->habitacionService->crear(
            $request->validated()
        );

        return new HabitacionResource($habitacion);
    }

    /*
    |--------------------------------------------------------------------------
    | MOSTRAR
    |--------------------------------------------------------------------------
    */

    public function show(Habitacion $habitacion)
    {
        return new HabitacionResource($habitacion);
    }

    /*
    |--------------------------------------------------------------------------
    | ACTUALIZAR
    |--------------------------------------------------------------------------
    */

    public function update(UpdateHabitacionRequest $request, $id)
{
    $habitacion = Habitacion::findOrFail($id);

    $data = array_filter($request->validated(), function ($value) {
        return $value !== null;
    });

    $habitacion->update($data);

    return response()->json([
        'message' => 'Habitación actualizada',
        'data' => new HabitacionResource($habitacion)
    ]);
}

    /*
    |--------------------------------------------------------------------------
    | ELIMINAR
    |--------------------------------------------------------------------------
    */

    public function destroy(Habitacion $habitacion)
    {
        $this->habitacionService->eliminar($habitacion);

        return response()->json([
            'message' => 'Habitación eliminada correctamente'
        ]);
    }
}