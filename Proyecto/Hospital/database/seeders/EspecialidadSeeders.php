<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Especialidad;

class EspecialidadSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Especialidad::insert([
        //Especialidad::factory()->createMany(
        ['nombre' => 'Cardiologia', 'correo_elec_esp' => 'cardiologia@gmail.com'],
        ['nombre' => 'Odontologia',  'correo_elec_esp' => 'odontologia@gmail.com'],
        ['nombre' => 'Medicina General', 'correo_elec_esp' => 'medicina_general@gmail.com'],
        ]);
    }
}
