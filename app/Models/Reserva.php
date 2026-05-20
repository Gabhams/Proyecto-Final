<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserva extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'reservas';

    protected $fillable = [
        'cliente_id',
        'habitacion_id',
        'fecha_inicio',
        'fecha_fin',
        'precio_total',
        'estado',
        'notas'
    ];

    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'precio_total' => 'decimal:2',
    ];

    public function cliente()
    {
        return $this->belongsTo(User::class, 'cliente_id');
    }

    public function habitacion()
    {
        return $this->belongsTo(Habitacion::class, 'habitacion_id');
    }

    public function scopeActivas($query)
    {
        return $query->whereIn('estado', ['pendiente', 'confirmada']);
    }

    public function getNochesAttribute(): int
    {
        return $this->fecha_inicio->diffInDays($this->fecha_fin);
    }
}