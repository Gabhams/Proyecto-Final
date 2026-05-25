<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Grand Horizon - Sistema de Reservas</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col font-sans">

    <nav class="bg-blue-700 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold flex items-center gap-2">
                <i class="fa-solid fa-hotel text-yellow-400"></i> Grand Horizon
            </a>
            
            <div class="space-x-4 text-sm font-medium">
                <a href="/" class="hover:text-blue-200 transition">Habitaciones</a>
                <a href="/login" class="hover:text-blue-200 transition">Iniciar Sesión</a>
                <a href="/register" class="bg-yellow-500 text-blue-900 px-4 py-2 rounded shadow hover:bg-yellow-600 transition font-semibold">Registrarse</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow max-w-7xl w-full mx-auto p-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-gray-400 text-center py-4 text-xs border-t border-gray-700">
        <p>&copy; 2026 Universidad Don Bosco - Escuela de Ingeniería en Computación.</p>
        <p class="text-gray-500 mt-1"> [DSS404]</p>
    </footer>

</body>
</html>