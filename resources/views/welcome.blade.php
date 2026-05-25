@php
    // DATOS REALES DEL SEEDER: Mapeo idéntico de las 11 habitaciones oficiales del Backend
    $tipoFiltrado = request('tipo');
    $precioMaxFiltrado = request('precio_max');

    $todasLasHabitaciones = collect([
        (object)['id' => 1, 'numero' => '101', 'tipo' => 'simple', 'precio' => 45.00, 'descripcion' => 'Habitación simple con vista al jardín.', 'disponible' => true],
        (object)['id' => 2, 'numero' => '102', 'tipo' => 'simple', 'precio' => 45.00, 'descripcion' => 'Habitación simple ideal para viajes de trabajo.', 'disponible' => true],
        (object)['id' => 3, 'numero' => '103', 'tipo' => 'simple', 'precio' => 50.00, 'descripcion' => 'Habitación simple con escritorio.', 'disponible' => false],
        
        (object)['id' => 4, 'numero' => '201', 'tipo' => 'doble', 'precio' => 75.00, 'descripcion' => 'Habitación doble con cama king size.', 'disponible' => true],
        (object)['id' => 5, 'numero' => '202', 'tipo' => 'doble', 'precio' => 80.00, 'descripcion' => 'Habitación doble con balcón.', 'disponible' => true],
        (object)['id' => 6, 'numero' => '203', 'tipo' => 'doble', 'precio' => 75.00, 'descripcion' => 'Habitación doble con vista a la piscina.', 'disponible' => false], // Mantenimiento
        
        (object)['id' => 7, 'numero' => '301', 'tipo' => 'suite', 'precio' => 150.00, 'descripcion' => 'Suite con jacuzzi y vista panorámica.', 'disponible' => true],
        (object)['id' => 8, 'numero' => '302', 'tipo' => 'suite', 'precio' => 160.00, 'descripcion' => 'Suite romántica con jacuzzi privado.', 'disponible' => true],
        
        (object)['id' => 9, 'numero' => '401', 'tipo' => 'familiar', 'precio' => 120.00, 'descripcion' => 'Habitación familiar con dos camas dobles.', 'disponible' => true],
        (object)['id' => 10, 'numero' => '402', 'tipo' => 'familiar', 'precio' => 130.00, 'descripcion' => 'Habitación familiar con cocina incluida.', 'disponible' => true],
        
        (object)['id' => 11, 'numero' => '501', 'tipo' => 'presidencial', 'precio' => 350.00, 'descripcion' => 'Suite presidencial con servicio 24h.', 'disponible' => true]
    ]);

    if (!isset($habitaciones) || $habitaciones->isEmpty()) {
        $habitaciones = $todasLasHabitaciones;

        if (!empty($tipoFiltrado)) {
            $habitaciones = $habitaciones->where('tipo', $tipoFiltrado);
        }

        if (!empty($precioMaxFiltrado)) {
            $habitaciones = $habitaciones->where('precio', '<=', floatval($precioMaxFiltrado));
        }
    }
@endphp

@extends('layouts.app') 

@section('content')
<div class="relative bg-slate-900 text-white rounded-2xl overflow-hidden mb-8 shadow-lg h-72 flex items-center justify-center bg-cover bg-center" 
     style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1200&auto=format&fit=crop');">
    <div class="absolute inset-0 bg-slate-950 bg-opacity-40"></div>
    <div class="relative z-10 text-center px-6 max-w-2xl">
        <span class="text-blue-400 text-xs font-bold uppercase tracking-widest bg-slate-900 bg-opacity-60 px-3 py-1 rounded-full mb-3 inline-block">
            Hotel Grand Horizon
        </span>
        <h1 class="text-4xl md:text-5xl font-extrabold mb-3 tracking-tight drop-shadow-md">
            Descubre Nuestras Habitaciones
        </h1>
        <p class="text-slate-200 text-sm md:text-base font-normal drop-shadow">
            Explore estancias diseñadas bajo los más altos estándares internacionales de confort, privacidad y elegancia corporativa.
        </p>
    </div>
</div>

<div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 mb-8">
    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
        <i class="fa-solid fa-sliders text-blue-600"></i> Filtrar Búsqueda
    </h3>
    <form action="{{ url('/') }}" method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <label class="block text-xs font-semibold uppercase text-gray-500 mb-1">Tipo de Estancia</label>
            <select name="tipo" class="w-full bg-gray-50 border border-gray-300 rounded-lg p-2 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none capitalize">
                <option value="">Todos los tipos</option>
                <option value="simple" {{ request('tipo') == 'simple' ? 'selected' : '' }}>Simple</option>
                <option value="doble" {{ request('tipo') == 'doble' ? 'selected' : '' }}>Doble</option>
                <option value="suite" {{ request('tipo') == 'suite' ? 'selected' : '' }}>Suite</option>
                <option value="familiar" {{ request('tipo') == 'familiar' ? 'selected' : '' }}>Familiar</option>
                <option value="presidencial" {{ request('tipo') == 'presidencial' ? 'selected' : '' }}>Presidencial</option>
            </select>
        </div>

        <div>
            <label class="block text-xs font-semibold uppercase text-gray-500 mb-1">Precio Máximo por Noche</label>
            <input type="number" name="precio_max" value="{{ request('precio_max') }}" placeholder="Ej. 150" class="w-full bg-gray-50 border border-gray-300 rounded-lg p-2 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <div class="flex items-end">
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg text-sm shadow transition flex justify-center items-center gap-2">
                <i class="fa-solid fa-magnifying-glass"></i> Aplicar Filtros
            </button>
        </div>
    </form>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @forelse($habitaciones as $habitacion)
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition p-5 flex flex-col justify-between">
        <div>
            <div class="flex justify-between items-start mb-2">
                <h4 class="text-xl font-bold text-gray-900">Habitación {{ $habitacion->numero }}</h4>
                @if($habitacion->disponible)
                    <span class="bg-green-100 text-green-800 text-xs px-2.5 py-0.5 rounded-full font-semibold">Disponible</span>
                @else
                    <span class="bg-red-100 text-red-800 text-xs px-2.5 py-0.5 rounded-full font-semibold">No Disponible</span>
                @endif
            </div>
            <p class="text-sm text-gray-600 mb-2 capitalize"><i class="fa-solid fa-bed text-blue-500 mr-1"></i> Tipo: {{ $habitacion->tipo }}</p>
            <p class="text-sm text-slate-500 leading-relaxed text-justify">{{ $habitacion->descripcion }}</p>
        </div>
        <div class="mt-5 pt-3 border-t border-gray-100 flex items-center justify-between">
            <div>
                <span class="text-gray-400 text-xs block">Por noche</span>
                <span class="text-2xl font-extrabold text-blue-600">${{ number_format($habitacion->precio, 2) }}</span>
            </div>
            @if($habitacion->disponible)
                <button type="button" data-id="{{ $habitacion->id }}" data-number="{{ $habitacion->numero }}" data-price="{{ number_format($habitacion->precio, 2) }}" class="open-modal-btn bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-lg transition shadow-sm">
                    Reservar
                </button>
            @else
                <button disabled class="bg-gray-200 text-gray-400 text-sm font-bold py-2 px-4 rounded-lg cursor-not-allowed">
                    Bloqueada
                </button>
            @endif
        </div>
    </div>
    @empty
    <div class="col-span-3 text-center py-12 text-gray-500">
        <i class="fa-solid fa-hotel text-4xl mb-2 text-gray-300"></i>
        <p>No se encontraron habitaciones con los criterios seleccionados.</p>
    </div>
    @endforelse
</div>

<div id="bookingModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-xl shadow-2xl max-w-md w-full p-6 relative border border-gray-100">
        <button id="closeModalBtn" type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>
        <div class="mb-4">
            <h3 class="text-xl font-bold text-gray-900 flex items-center gap-2">
                <i class="fa-solid fa-calendar-check text-blue-600"></i> Formulario de Reserva
            </h3>
            <p class="text-xs text-gray-500">Completa los datos de tu estadía para asegurar tu habitación.</p>
        </div>
        <form action="{{ route('reservas.store') }}" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="habitacion_id" id="modalHabitacionId">
            <div class="grid grid-cols-2 gap-3 bg-gray-50 p-3 rounded-lg border border-gray-200">
                <div>
                    <label class="block text-[10px] font-bold uppercase text-gray-400">Habitación Seleccionada</label>
                    <span id="modalRoomNumber" class="text-sm font-bold text-gray-800">Num. --</span>
                </div>
                <div>
                    <label class="block text-[10px] font-bold uppercase text-gray-400">Precio por Noche</label>
                    <span id="modalRoomPrice" class="text-sm font-extrabold text-blue-600">$--</span>
                </div>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Fecha de Entrada (Check-In)</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                        <i class="fa-solid fa-calendar-plus"></i>
                    </span>
                    <input type="date" name="fecha_entrada" required class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                </div>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Fecha de Salida (Check-Out)</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                        <i class="fa-solid fa-calendar-minus"></i>
                    </span>
                    <input type="date" name="fecha_salida" required class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                </div>
            </div>
            <button type="submit" class="w-full bg-green-600 text-white font-bold py-2.5 px-4 rounded-lg hover:bg-green-700 transition shadow-md flex justify-center items-center gap-2 mt-2 font-semibold tracking-wide">
                <i class="fa-solid fa-circle-check"></i> Confirmar y Reservar
            </button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('bookingModal');
        const closeBtn = document.getElementById('closeModalBtn');
        const openBtns = document.querySelectorAll('.open-modal-btn');
        const modalHabitacionId = document.getElementById('modalHabitacionId');
        const modalRoomNumber = document.getElementById('modalRoomNumber');
        const modalRoomPrice = document.getElementById('modalRoomPrice');

        openBtns.forEach(button => {
            button.addEventListener('click', function() {
                const roomId = this.getAttribute('data-id');
                const roomNumber = this.getAttribute('data-number');
                const roomPrice = this.getAttribute('data-price');
                if (modalHabitacionId) modalHabitacionId.value = roomId;
                if (modalRoomNumber) modalRoomNumber.textContent = 'Num. ' + roomNumber;
                if (modalRoomPrice) modalRoomPrice.textContent = '$' + roomPrice;
                modal.classList.remove('hidden');
            });
        });

        if (closeBtn) closeBtn.addEventListener('click', function() { modal.classList.add('hidden'); });
        modal.addEventListener('click', function(e) { if (e.target === modal) modal.classList.add('hidden'); });
    });
</script>
@endsection