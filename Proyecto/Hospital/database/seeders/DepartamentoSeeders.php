<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departamento;
use App\Models\Especialidad;

class DepartamentoSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       $cardiologia = Especialidad::where ('nombre', 'Cardiologia')->first()->id;
       $odontolodia = Especialidad::where ('nombre', 'Odontologia')->first()->id;
       $medicinageneral = Especialidad::where ('nombre', 'Medicina General')->first()->id;
       
        Departamento::insert([
        ['especialidad_id' => $cardiologia, 'nombre' => 'Cardiologo Clinico'],
        ['especialidad_id' => $odontolodia, 'nombre' => 'Cirujano Maxilofacial'],
        ['especialidad_id' => $medicinageneral, 'nombre' => 'Medicina Preventiva'],
        ]);
    }
}
