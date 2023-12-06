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
        Schema::create('escritos', function (Blueprint $table) {
            $table->id();
            $table->biginteger('codigo_libro')->unsigned();
            $table->foreign('codigo_libro')->references('id')->on('libros');
            $table->biginteger('codigo_autor')->unsigned();
            $table->foreign('codigo_autor')->references('id')->on('autores');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escritos');
    }
};
