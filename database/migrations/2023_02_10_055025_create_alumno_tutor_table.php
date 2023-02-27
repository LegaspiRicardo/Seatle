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
        Schema::create('alumno_tutor', function (Blueprint $table) {
            $table->unsignedBigInteger('alumno');
            $table->unsignedBigInteger('tutor');
            // ------  Llave foranea para tutor y alumno    --------//
            $table->foreign('tutor')->references('id')->on('tutors');
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
        Schema::dropIfExists('alumno_tutor');
    }
};
