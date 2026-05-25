<?php

use Illuminate\Support\Facades\Route;

// 1. Dirección para ver el catálogo de habitaciones (Página principal)
Route::get('/', function () {
    return view('welcome');
});

// 2. Dirección para ver tu pantalla de Iniciar Sesión
Route::get('/login', function () {
    return view('auth.login');
});

// 3. Dirección para ver tu pantalla de Registro
Route::get('/register', function () {
    return view('auth.register');
});

// 4. Dirección para ver tu Panel de Cliente
Route::get('/dashboard', function () {
    return view('customer.dashboard');
});

// 5. Dirección para ver tu Panel de Administrador
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});