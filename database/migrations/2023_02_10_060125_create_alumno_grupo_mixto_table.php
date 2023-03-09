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
        Schema::create('alumno_grupo_mixto', function (Blueprint $table) {
            $table->unsignedBigInteger('alumno');
            $table->unsignedBigInteger('grupoMixto');
            // ------  Llave foranea para grupoMixto y alumno    --------//
            $table->foreign('grupoMixto')->references('id')->on('grupo_mixtos');
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
        Schema::dropIfExists('alumno_grupo_mixto');
    }
};
