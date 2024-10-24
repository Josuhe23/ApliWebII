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
        Schema::create('cardiologia', function (Blueprint $table) {
            $table->id();  // ID auto-incremental
            $table->unsignedBigInteger('derivacion_id');  // ID de la derivación
            $table->decimal('frecuencia_cardiaca', 5, 2);
            $table->decimal('presion_arterial', 5, 2);
            $table->timestamps();
        
            // Definir la clave foránea
            $table->foreign('derivacion_id')->references('id')->on('derivaciones')->onDelete('cascade');
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
