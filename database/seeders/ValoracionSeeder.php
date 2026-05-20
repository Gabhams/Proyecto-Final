<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Valoracion;

class ValoracionSeeder extends Seeder {
    public function run(): void {
        Valoracion::create(['cliente_id' => 2, 'habitacion_id' => 1, 'puntuacion' => 5, 'comentario' => 'Excelente habitación, muy limpia y cómoda.']);
        Valoracion::create(['cliente_id' => 3, 'habitacion_id' => 4, 'puntuacion' => 4, 'comentario' => 'Muy buena experiencia, habitación espaciosa.']);
        Valoracion::create(['cliente_id' => 4, 'habitacion_id' => 7, 'puntuacion' => 5, 'comentario' => 'La suite es increíble, definitivamente volvemos.']);
    }
}
