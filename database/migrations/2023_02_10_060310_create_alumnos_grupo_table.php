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
        Schema::create('alumnos_grupo', function (Blueprint $table) {
            $table->unsignedBigInteger('alumno');
            $table->unsignedBigInteger('grupo');
            // ------  Llave foranea para grupo y alumno    --------//
            $table->foreign('grupo')->references('id')->on('grupos');
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
        Schema::dropIfExists('alumnos_grupo');
    }
};
