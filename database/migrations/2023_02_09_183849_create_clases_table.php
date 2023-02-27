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
        Schema::create('clases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('alumno');
            $table->unsignedBigInteger('maestro');
            $table->timestamp('inicio')->nullable();
            $table->timestamp('fin')->nullable();
            // ------  Llave foranea para alumno y maestro    --------//
            $table->foreign('alumno')->references('id')->on('alumnos');
            $table->foreign('maestro')->references('id')->on('maestros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clases');
    }
};
