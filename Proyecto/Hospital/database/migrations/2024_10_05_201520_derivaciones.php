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
        Schema::create('derivaciones', function (Blueprint $table) {
            $table->id();
            $table->string('cedula')->constrained('persona');  // Relación con la tabla persona
            $table->decimal('estatura', 5, 2);
            $table->decimal('peso', 5, 2);
            $table->decimal('presion', 5, 2);
            $table->decimal('presion_ari', 5, 2);
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
