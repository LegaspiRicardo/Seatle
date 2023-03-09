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
        Schema::create('maestro_clase', function (Blueprint $table) {
            $table->unsignedBigInteger('maestro');
            $table->unsignedBigInteger('clase');
            // ------  Llave foranea para clases y alumno    --------//
            $table->foreign('clase')->references('id')->on('clases');
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
        Schema::dropIfExists('maestro_clase');
    }
};
