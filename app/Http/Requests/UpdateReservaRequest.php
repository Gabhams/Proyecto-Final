<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReservaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'cliente_id' => 'sometimes|exists:users,id',

            'habitacion_id' => 'sometimes|exists:habitaciones,id',

            'fecha_inicio' => 'sometimes|date',

            'fecha_fin' => 'sometimes|date|after:fecha_inicio',

            'estado' =>
                'sometimes|in:pendiente,confirmada,cancelada,completada',

            'notas' => 'sometimes|nullable|string'

        ];
    }
}