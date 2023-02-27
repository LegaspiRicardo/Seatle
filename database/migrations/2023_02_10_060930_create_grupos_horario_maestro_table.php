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
        Schema::create('grupos_horario_maestro', function (Blueprint $table) {
            $table->unsignedBigInteger('id_horario_maestro');
            $table->unsignedBigInteger('grupo');
            // ------  Llave foranea para grupo y maestro    --------//
            $table->foreign('grupo')->references('id')->on('grupos');
            $table->foreign('id_horario_maestro')->references('id')->on('horarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos_horario_maestro');
    }
};
