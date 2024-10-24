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
        Schema::create('medicina_general', function (Blueprint $table) {
            $table->id(); // ID auto-incremental para medicina_general
            $table->unsignedBigInteger('derivacion_id'); // Clave foránea que hace referencia a derivaciones
            // Otros campos que necesites para medicina_general
            $table->timestamps();

            // Definición de la llave foránea
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
