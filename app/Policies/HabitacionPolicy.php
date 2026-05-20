<?php

namespace App\Policies;

use App\Models\Habitacion;
use App\Models\User;

class HabitacionPolicy
{
    /**
     * Ver listado de habitaciones
     */
    public function viewAny(User $user): bool
    {
        return true; // todos los autenticados pueden ver listado
    }

    /**
     * Ver una habitación
     */
    public function view(User $user, Habitacion $habitacion): bool
    {
        return true; // cliente y admin pueden ver
    }

    /**
     * Crear habitaciones
     */
    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Actualizar habitaciones
     */
    public function update(User $user, Habitacion $habitacion): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Eliminar habitaciones
     */
    public function delete(User $user, Habitacion $habitacion): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Restaurar habitaciones
     */
    public function restore(User $user, Habitacion $habitacion): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Eliminar permanentemente habitaciones
     */
    public function forceDelete(User $user, Habitacion $habitacion): bool
    {
        return $user->role === 'admin';
    }
}