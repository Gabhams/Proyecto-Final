<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Habitacion;

class HabitacionSeeder extends Seeder {
    public function run(): void {
        $habitaciones = [
            ['numero' => '101', 'tipo_id' => 1, 'precio_noche' => 45.00, 'capacidad' => 1, 'estado' => 'disponible', 'descripcion' => 'Habitación simple con vista al jardín.'],
            ['numero' => '102', 'tipo_id' => 1, 'precio_noche' => 45.00, 'capacidad' => 1, 'estado' => 'disponible', 'descripcion' => 'Habitación simple ideal para viajes de trabajo.'],
            ['numero' => '103', 'tipo_id' => 1, 'precio_noche' => 50.00, 'capacidad' => 1, 'estado' => 'ocupada', 'descripcion' => 'Habitación simple con escritorio.'],
            ['numero' => '201', 'tipo_id' => 2, 'precio_noche' => 75.00, 'capacidad' => 2, 'estado' => 'disponible', 'descripcion' => 'Habitación doble con cama king size.'],
            ['numero' => '202', 'tipo_id' => 2, 'precio_noche' => 80.00, 'capacidad' => 2, 'estado' => 'disponible', 'descripcion' => 'Habitación doble con balcón.'],
            ['numero' => '203', 'tipo_id' => 2, 'precio_noche' => 75.00, 'capacidad' => 2, 'estado' => 'mantenimiento', 'descripcion' => 'Habitación doble con vista a la piscina.'],
            ['numero' => '301', 'tipo_id' => 3, 'precio_noche' => 150.00, 'capacidad' => 2, 'estado' => 'disponible', 'descripcion' => 'Suite con jacuzzi y vista panorámica.'],
            ['numero' => '302', 'tipo_id' => 3, 'precio_noche' => 160.00, 'capacidad' => 2, 'estado' => 'disponible', 'descripcion' => 'Suite romántica con jacuzzi privado.'],
            ['numero' => '401', 'tipo_id' => 4, 'precio_noche' => 120.00, 'capacidad' => 4, 'estado' => 'disponible', 'descripcion' => 'Habitación familiar con dos camas dobles.'],
            ['numero' => '402', 'tipo_id' => 4, 'precio_noche' => 130.00, 'capacidad' => 4, 'estado' => 'disponible', 'descripcion' => 'Habitación familiar con cocina incluida.'],
            ['numero' => '501', 'tipo_id' => 5, 'precio_noche' => 350.00, 'capacidad' => 2, 'estado' => 'disponible', 'descripcion' => 'Suite presidencial con servicio 24h.'],
        ];
        foreach ($habitaciones as $h) { Habitacion::create($h); }
    }
}
