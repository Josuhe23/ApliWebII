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
        Schema::create('turno', function (Blueprint $table) {
            $table->bigIncrements('id_turno'); // Identificador del turno
            $table->string('cedula'); // Cédula del usuario (referencia a la tabla usuario)
            $table->dateTime('fecha_hora'); // Fecha y hora del turno
            $table->string('motivo')->nullable(); // Motivo del turno
            $table->timestamps();
            // Definición de la llave foránea que referencia a la tabla usuario
            $table->foreign('cedula')->references('cedula')->on('usuario')->onDelete('cascade');
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
