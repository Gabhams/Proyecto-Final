<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Habitacion extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'habitaciones';

    protected $fillable = [
        'numero',
        'tipo_id',
        'precio_noche',
        'capacidad',
        'descripcion',
        'foto',
        'estado'
    ];

    protected $casts = [
        'precio_noche' => 'decimal:2',
        'capacidad' => 'integer',
    ];

    public function tipo()
    {
        return $this->belongsTo(TipoHabitacion::class, 'tipo_id');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'habitacion_id');
    }
}
