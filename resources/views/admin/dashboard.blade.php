@extends('layouts.app') @section('content')
<div class="max-w-6xl mx-auto">
    
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Panel de Control General</h1>
            <p class="text-sm text-gray-600">Visualización global y control de todas las reservaciones del hotel.</p>
        </div>
        <div class="bg-red-50 text-red-700 font-bold px-4 py-2 rounded-lg border border-red-200 text-sm flex items-center gap-2">
            <i class="fa-solid fa-user-shield"></i> Modo Administrador
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden">
        <div class="p-5 border-b border-gray-100 bg-gray-50">
            <h3 class="font-bold text-gray-800 flex items-center gap-2">
                <i class="fa-solid fa-list-check text-blue-600"></i> Registro de Operaciones del Sistema
            </h3>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-gray-600 uppercase text-xs font-semibold tracking-wider border-b border-gray-200">
                        <th class="p-4">Código</th>
                        <th class="p-4">Huésped / Cliente</th>
                        <th class="p-4">Habitación</th>
                        <th class="p-4">Período de Estadía</th>
                        <th class="p-4">Monto Total</th>
                        <th class="p-4 text-center">Estado</th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100 text-gray-700">
                    
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-4 font-mono font-bold text-gray-500">#RES-001</td>
                        <td class="p-4">
                            <div class="font-semibold text-gray-900">Juan Pérez</div>
                            <div class="text-xs text-gray-400">juan.perez@email.com</div>
                        </td>
                        <td class="p-4 font-medium text-gray-800">Num. 101 (Individual)</td>
                        <td class="p-4">
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded font-medium">15/06/2026</span> al 
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded font-medium">18/06/2026</span>
                        </td>
                        <td class="p-4 font-bold text-gray-900">$135.00</td>
                        <td class="p-4 text-center">
                            <span class="bg-green-100 text-green-800 px-2.5 py-1 rounded-full text-xs font-bold uppercase">Confirmada</span>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-4 font-mono font-bold text-gray-500">#RES-002</td>
                        <td class="p-4">
                            <div class="font-semibold text-gray-900">María López</div>
                            <div class="text-xs text-gray-400">maria.lopez@email.com</div>
                        </td>
                        <td class="p-4 font-medium text-gray-800">Num. 204 (Doble)</td>
                        <td class="p-4">
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded font-medium">22/07/2026</span> al 
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded font-medium">25/07/2026</span>
                        </td>
                        <td class="p-4 font-bold text-gray-900">$225.00</td>
                        <td class="p-4 text-center">
                            <span class="bg-yellow-100 text-yellow-800 px-2.5 py-1 rounded-full text-xs font-bold uppercase">Pendiente</span>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection