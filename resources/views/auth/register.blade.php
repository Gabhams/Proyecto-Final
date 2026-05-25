@extends('layouts.app') @section('content')
<div class="max-w-md mx-auto mt-6 bg-white p-8 rounded-xl shadow-lg border border-gray-100">
    
    <div class="text-center mb-6">
        <i class="fa-solid fa-user-plus text-blue-600 text-5xl mb-2"></i>
        <h2 class="text-2xl font-bold text-gray-800">Crear Cuenta</h2>
        <p class="text-sm text-gray-500">Regístrate para empezar a reservar tus habitaciones</p>
    </div>

    <form class="space-y-4">
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Nombre Completo</label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                    <i class="fa-solid fa-user"></i>
                </span>
                <input type="text" placeholder="Tu nombre y apellido" required class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
            </div>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Correo Electrónico</label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                    <i class="fa-solid fa-envelope"></i>
                </span>
                <input type="email" placeholder="ejemplo@correo.com" required class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
            </div>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Contraseña</label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                    <i class="fa-solid fa-lock"></i>
                </span>
                <input type="password" placeholder="Mínimo 8 caracteres" required class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
            </div>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Confirmar Contraseña</label>
            <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                    <i class="fa-solid fa-lock-keyhole"></i>
                </span>
                <input type="password" placeholder="Repite tu contraseña" required class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm">
            </div>
        </div>

        <button type="submit" class="w-full bg-yellow-500 text-blue-900 font-extrabold py-2.5 px-4 rounded-lg hover:bg-yellow-600 transition shadow-md flex justify-center items-center gap-2 mt-2">
            <i class="fa-solid fa-address-card"></i> Registrarme
        </button>
    </form>
    
    <div class="text-center mt-6 text-sm">
        <p class="text-gray-600">¿Ya tienes una cuenta? <a href="/login" class="text-blue-600 font-semibold hover:underline">Inicia sesión aquí</a></p>
    </div>
</div>
@endsection