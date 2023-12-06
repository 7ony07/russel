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
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->id();
            $table->biginteger('codigo_prestamo')->unsigned();
            $table->foreign('codigo_prestamo')->references('id')->on('prestamos');
            $table->biginteger('codigo_volumen')->unsigned();
            $table->foreign('codigo_volumen')->references('id')->on('volumens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaciones');
    }
};
