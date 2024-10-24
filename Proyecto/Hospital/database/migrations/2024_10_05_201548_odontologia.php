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
        Schema::create('odontologia', function (Blueprint $table) {
            $table->id(); // ID auto-incremental para la tabla odontologia
            $table->unsignedBigInteger('derivacion_id'); // ID de derivación (clave foránea)
            // Añade los campos que necesites para la tabla odontologia
            $table->string('campo_1'); // Por ejemplo: campo 1
            $table->string('campo_2'); // Por ejemplo: campo 2
            $table->timestamps();

            // Definición de la llave foránea que referencia a la tabla derivaciones
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
