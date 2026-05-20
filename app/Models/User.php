<?php

namespace App\Models;

use App\Models\Reserva;
use App\Models\Valoracion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'role',
        'telefono'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed'
    ];

    // ======================
    // RELACIONES
    // ======================

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'cliente_id');
    }

    public function valoraciones()
    {
        return $this->hasMany(Valoracion::class, 'cliente_id');
    }

    // ======================
    // SCOPES
    // ======================

    public function scopeClientes($query)
    {
        return $query->where('role', 'cliente');
    }

    public function scopeAdmins($query)
    {
        return $query->where('role', 'admin');
    }

    // ======================
    // HELPERS
    // ======================

    public function esAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function esCliente(): bool
    {
        return $this->role === 'cliente';
    }
}