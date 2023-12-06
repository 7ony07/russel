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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            //lokita
            $table->biginteger('id_socios')->unsigned();
            $table->foreign('id_socios')->references('id')->on('socios');
            //lokis2
            $table->date('fechadevolucion');
            $table->date('fechareal');
            $table->date('fechaprestamo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
