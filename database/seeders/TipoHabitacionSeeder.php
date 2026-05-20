<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoHabitacionSeeder extends Seeder {
    public function run(): void {
        DB::table('tipos_habitacion')->insert([
            ['nombre' => 'Simple', 'descripcion' => 'Habitación para una persona con cama individual.', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Doble', 'descripcion' => 'Habitación para dos personas con cama doble.', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Suite', 'descripcion' => 'Suite de lujo con sala de estar y jacuzzi.', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Familiar', 'descripcion' => 'Habitación amplia para familias de hasta 4 personas.', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Presidencial', 'descripcion' => 'La habitación más exclusiva con todos los servicios premium.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
