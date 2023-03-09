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
        Schema::create('horario_maestros', function (Blueprint $table) {
            $table->unsignedBigInteger('horario');
            $table->unsignedBigInteger('maestro');

            // ------  Llave foranea para horarioMaestro y Maestro    --------//
            $table->foreign('horario')->references('id')->on('horarios');
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
        Schema::dropIfExists('horario_maestros');
    }
};
