<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHabitacionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'numero' => 'required|string|max:10|unique:habitaciones,numero',

            'tipo_id' => 'required|exists:tipos_habitacion,id',

            'precio_noche' => 'required|numeric|min:1',

            'capacidad' => 'required|integer|min:1',

            'descripcion' => 'nullable|string|max:500',

            'foto' => 'nullable|string',

            'estado' => 'required|in:disponible,ocupada,mantenimiento',

        ];
    }
}