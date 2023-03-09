<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_pago', function (Blueprint $table) {
            $table->unsignedBigInteger('alumno');
            $table->unsignedBigInteger('pago');
            $table->timestamp('fecha_pago')->nullable();
            // ------  Llave foranea para pago y alumno    --------//
            $table->foreign('pago')->references('id')->on('pagos');
            $table->foreign('alumno')->references('id')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_pago');
    }
};
