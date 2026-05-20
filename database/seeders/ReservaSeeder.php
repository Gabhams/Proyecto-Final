<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Reserva;

class ReservaSeeder extends Seeder {
    public function run(): void {
        $reservas = [
            ['cliente_id' => 2, 'habitacion_id' => 1, 'fecha_inicio' => '2026-04-01', 'fecha_fin' => '2026-04-03', 'precio_total' => 90.00, 'estado' => 'completada', 'notas' => 'Llegada tardía.'],
            ['cliente_id' => 3, 'habitacion_id' => 4, 'fecha_inicio' => '2026-04-10', 'fecha_fin' => '2026-04-14', 'precio_total' => 300.00, 'estado' => 'completada', 'notas' => null],
            ['cliente_id' => 4, 'habitacion_id' => 7, 'fecha_inicio' => '2026-04-20', 'fecha_fin' => '2026-04-22', 'precio_total' => 300.00, 'estado' => 'completada', 'notas' => 'Decoración para aniversario.'],
            ['cliente_id' => 5, 'habitacion_id' => 5, 'fecha_inicio' => '2026-05-20', 'fecha_fin' => '2026-05-23', 'precio_total' => 240.00, 'estado' => 'confirmada', 'notas' => null],
            ['cliente_id' => 6, 'habitacion_id' => 9, 'fecha_inicio' => '2026-05-25', 'fecha_fin' => '2026-05-30', 'precio_total' => 600.00, 'estado' => 'confirmada', 'notas' => 'Familia con 2 niños.'],
            ['cliente_id' => 7, 'habitacion_id' => 8, 'fecha_inicio' => '2026-06-01', 'fecha_fin' => '2026-06-03', 'precio_total' => 320.00, 'estado' => 'pendiente', 'notas' => null],
            ['cliente_id' => 2, 'habitacion_id' => 2, 'fecha_inicio' => '2026-04-05', 'fecha_fin' => '2026-04-07', 'precio_total' => 90.00, 'estado' => 'cancelada', 'notas' => 'Cancelada por el cliente.'],
        ];
        foreach ($reservas as $r) { Reserva::create($r); }
    }
}
