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
        Schema::create('grupo_mixtos', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('alumno');
            $table->string('nivel', 100);
            $table->unsignedBigInteger('maestro');
            // ------  Llave foranea para alumno y profesor   ------//
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
        Schema::dropIfExists('grupo_mixtos');
    }
};
