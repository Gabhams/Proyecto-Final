<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HabitacionController;
use App\Http\Controllers\Api\ReservaController;
use App\Http\Controllers\Api\TipoHabitacionController;

/*
|--------------------------------------------------------------------------
| RUTAS PÚBLICAS
|--------------------------------------------------------------------------
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

/*
|--------------------------------------------------------------------------
| API VERSION 1 (PROTEGIDA)
|--------------------------------------------------------------------------
*/

Route::prefix('v1')->middleware('auth:sanctum')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | AUTH
    |--------------------------------------------------------------------------
    */

    Route::post('/logout', [AuthController::class, 'logout']);

    /*
    |--------------------------------------------------------------------------
    | ADMIN
    |--------------------------------------------------------------------------
    */

    Route::middleware(['role:admin'])->group(function () {

        /*
        |--------------------------------------------------------------------------
        | UPDATE MANUAL HABITACION
        |--------------------------------------------------------------------------
        */

        Route::post(
            '/habitaciones/update/{id}',
            [HabitacionController::class, 'update']
        );

        /*
        |--------------------------------------------------------------------------
        | CRUD HABITACIONES
        |--------------------------------------------------------------------------
        */

        Route::apiResource(
            'habitaciones',
            HabitacionController::class
        );

        /*
        |--------------------------------------------------------------------------
        | CRUD TIPOS HABITACION
        |--------------------------------------------------------------------------
        */

        Route::apiResource(
            'tipos-habitacion',
            TipoHabitacionController::class
        );

        /*
        |--------------------------------------------------------------------------
        | TEST ADMIN
        |--------------------------------------------------------------------------
        */

        Route::get('/admin-test', function () {

            return response()->json([
                'message' => 'Eres admin'
            ]);

        });

    });

    /*
    |--------------------------------------------------------------------------
    | ADMIN + CLIENTE
    |--------------------------------------------------------------------------
    */

    Route::middleware(['role:admin,cliente'])->group(function () {

        /*
        |--------------------------------------------------------------------------
        | CRUD RESERVAS
        |--------------------------------------------------------------------------
        */

        Route::apiResource(
            'reservas',
            ReservaController::class
        );

    });

});