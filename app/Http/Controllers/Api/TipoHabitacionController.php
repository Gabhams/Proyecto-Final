<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\TipoHabitacion;

use Illuminate\Http\Request;

class TipoHabitacionController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | LISTAR
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        return response()->json(
            TipoHabitacion::paginate(10)
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CREAR
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'nombre' =>
            'required|string|max:100|unique:tipos_habitacion,nombre',

            'descripcion' =>
            'nullable|string'

        ]);

        $tipo = TipoHabitacion::create(
            $request->all()
        );

        return response()->json([
            'message' => 'Tipo de habitación creado',
            'data' => $tipo
        ], 201);
    }

    /*
    |--------------------------------------------------------------------------
    | MOSTRAR
    |--------------------------------------------------------------------------
    */

    public function show(TipoHabitacion $tipos_habitacion)
    {
        return response()->json(
            $tipos_habitacion
        );
    }

    /*
    |--------------------------------------------------------------------------
    | ACTUALIZAR
    |--------------------------------------------------------------------------
    */

    public function update(
        Request $request,
        TipoHabitacion $tipos_habitacion
    ) {

        $request->validate([

            'nombre' =>
            'sometimes|string|max:100|unique:tipos_habitacion,nombre,' .
            $tipos_habitacion->id,

            'descripcion' =>
            'nullable|string'

        ]);

        $tipos_habitacion->update(
            $request->all()
        );

        return response()->json([
            'message' => 'Tipo actualizado',
            'data' => $tipos_habitacion
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | ELIMINAR
    |--------------------------------------------------------------------------
    */

    public function destroy(TipoHabitacion $tipos_habitacion)
    {
        $tipos_habitacion->delete();

        return response()->json([
            'message' => 'Tipo eliminado'
        ]);
    }
}