<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        $this->call([
            TipoHabitacionSeeder::class,
            UserSeeder::class,
            HabitacionSeeder::class,
            ReservaSeeder::class,
            ValoracionSeeder::class,
        ]);
    }
}
