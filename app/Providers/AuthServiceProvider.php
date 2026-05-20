<?php

namespace App\Providers;

use App\Models\Habitacion;
use App\Policies\HabitacionPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Registrar policies de la aplicación
     */
    protected $policies = [
        Habitacion::class => HabitacionPolicy::class,
    ];

    /**
     * Bootstrap services
     */
    public function boot(): void
    {
        // Registrar policies
        $this->registerPolicies();

        // Gate solo para admins
        Gate::define('admin-only', function ($user) {
            return $user->role === 'admin';
        });

        // Gate solo para clientes
        Gate::define('cliente-only', function ($user) {
            return $user->role === 'cliente';
        });
    }
}