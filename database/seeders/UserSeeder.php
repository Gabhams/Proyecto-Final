<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder {
    public function run(): void {
        User::create(['nombre' => 'Administrador Hotel', 'email' => 'admin@hotel.com', 'password' => Hash::make('password'), 'rol' => 'admin', 'telefono' => '7000-0000']);
        User::create(['nombre' => 'Carlos Martínez', 'email' => 'carlos@gmail.com', 'password' => Hash::make('password'), 'rol' => 'cliente', 'telefono' => '7111-1111']);
        User::create(['nombre' => 'Ana González', 'email' => 'ana@gmail.com', 'password' => Hash::make('password'), 'rol' => 'cliente', 'telefono' => '7222-2222']);
        User::create(['nombre' => 'Luis Hernández', 'email' => 'luis@gmail.com', 'password' => Hash::make('password'), 'rol' => 'cliente', 'telefono' => '7333-3333']);
        User::create(['nombre' => 'María López', 'email' => 'maria@gmail.com', 'password' => Hash::make('password'), 'rol' => 'cliente', 'telefono' => '7444-4444']);
        User::create(['nombre' => 'José Rodríguez', 'email' => 'jose@gmail.com', 'password' => Hash::make('password'), 'rol' => 'cliente', 'telefono' => '7555-5555']);
        User::create(['nombre' => 'Cliente Prueba', 'email' => 'cliente@hotel.com', 'password' => Hash::make('password'), 'rol' => 'cliente', 'telefono' => '7888-8888']);
    }
}
