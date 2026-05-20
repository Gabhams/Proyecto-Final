<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HabitacionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->id,

            'numero' => $this->numero,

            'tipo_id' => $this->tipo_id,

            'precio_noche' => $this->precio_noche,

            'capacidad' => $this->capacidad,

            'descripcion' => $this->descripcion,

            'foto' => $this->foto,

            'estado' => $this->estado,

            'created_at' => $this->created_at,

            'updated_at' => $this->updated_at,

        ];
    }
}