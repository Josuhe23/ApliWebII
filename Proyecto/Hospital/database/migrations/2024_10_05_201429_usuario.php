<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->string('cedula')->primary();  // La cédula es la clave primaria
            $table->foreignId('id_dept')->constrained('departamento');  // Relación con la tabla departamento
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('correo_elec');
            $table->string('sexo');
            $table->string('estado_civil');
            $table->string('titulo');
            $table->integer('rol');  // 0 = recepción, 1 = paciente externo, 2 = doctor, 3 = enfermera, 4 = empleado
            $table->timestamps();
        });       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
