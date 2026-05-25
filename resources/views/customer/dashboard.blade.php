@extends('layouts.app') @section('content')
<div class="max-w-4xl mx-auto">
    
    <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Mi Panel de Reservas</h1>
            <p class="text-sm text-gray-600">Bienvenido de vuelta. Aquí puedes revisar el historial de tus estadías en el hotel.</p>
        </div>
        <div class="bg-blue-50 text-blue-700 font-semibold px-4 py-2 rounded-lg border border-blue-200 text-sm flex items-center gap-2 w-fit">
            <i class="fa-solid fa-user"></i> Área de Clientes
        </div>
    </div>

    <div class="space-y-4">
        
        <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4 hover:shadow-md transition">
            <div class="flex items-center gap-4">
                <div class="bg-blue-50 h-14 w-14 rounded-lg flex items-center justify-center text-blue-600 text-xl font-bold">
                    <i class="fa-solid fa-door-closed"></i>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-lg">Habitación 101 (Individual)</h4>
                    <p class="text-sm text-gray-500">
                        <i class="fa-solid fa-calendar-days text-gray-400 mr-1"></i> del 15/06/2026 al 18/06/2026
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-between md:justify-end gap-6 pt-3 md:pt-0 border-t md:border-none border-gray-50">
                <div class="text-left md:text-right">
                    <p class="text-xs text-gray-400 uppercase font-semibold">Total Pagado</p>
                    <p class="text-xl font-extrabold text-gray-900">$135.00</p>
                </div>
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                    Confirmada
                </span>
            </div>
        </div>

        <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4 hover:shadow-md transition">
            <div class="flex items-center gap-4">
                <div class="bg-blue-50 h-14 w-14 rounded-lg flex items-center justify-center text-blue-600 text-xl font-bold">
                    <i class="fa-solid fa-door-closed"></i>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-lg">Habitación 204 (Doble)</h4>
                    <p class="text-sm text-gray-500">
                        <i class="fa-solid fa-calendar-days text-gray-400 mr-1"></i> del 22/07/2026 al 25/07/2026
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-between md:justify-end gap-6 pt-3 md:pt-0 border-t md:border-none border-gray-50">
                <div class="text-left md:text-right">
                    <p class="text-xs text-gray-400 uppercase font-semibold">Total Estacio</p>
                    <p class="text-xl font-extrabold text-gray-900">$225.00</p>
                </div>
                <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                    Pendiente
                </span>
            </div>
        </div>

    </div>
</div>
@endsection