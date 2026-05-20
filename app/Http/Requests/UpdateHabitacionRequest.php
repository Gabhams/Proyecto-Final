<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHabitacionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

   public function rules(): array
{
    return [
        'numero' => 'sometimes|string|max:10|unique:habitaciones,numero,' . $this->habitacion,
        'tipo_id' => 'sometimes|exists:tipos_habitacion,id',
        'precio_noche' => 'sometimes|numeric|min:1',
        'capacidad' => 'sometimes|integer|min:1',
        'descripcion' => 'sometimes|nullable|string|max:500',
        'foto' => 'sometimes|nullable|string',
        'estado' => 'sometimes|in:disponible,ocupada,mantenimiento',
    ];
}
}