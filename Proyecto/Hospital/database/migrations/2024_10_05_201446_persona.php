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
        Schema::create('persona', function (Blueprint $table) {
            $table->string('cedula')->primary();  // La cédula es la clave primaria
            $table->foreign('cedula')->references('cedula')->on('usuario');  // Relación con usuario
            $table->string('apellido');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('correo_elec');
            $table->date('nacimiento');
            $table->string('diagnostico')->nullable();  // Si es un paciente externo, podría tener diagnóstico
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
