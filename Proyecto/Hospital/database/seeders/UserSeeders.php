<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Importa Hash aquí
use Carbon\Carbon; // Para manejar fechas

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Omar',
                'email' => 'omar@gmail.com',
                'password' => Hash::make('12345'),
                'created_at' => Carbon::now(), // Fecha actual
                'updated_at' => Carbon::now(), // Fecha actual
            ],
            [
                'name' => 'Carol',
                'email' => 'carol@gmail.com',
                'password' => Hash::make('12345'),
                'created_at' => Carbon::now()->subDays(10), // Hace 10 días
                'updated_at' => Carbon::now()->subDays(10), // Hace 10 días
            ],
            [
                'name' => 'Emiliano',
                'email' => 'emiliano@gmail.com',
                'password' => Hash::make('12345'),
                'created_at' => Carbon::now()->subDays(5), // Hace 5 días
                'updated_at' => Carbon::now()->subDays(5), // Hace 5 días
            ],
        ]);
    }
}

