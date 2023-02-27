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
        Schema::create('maestros_grupo', function (Blueprint $table) {
            $table->unsignedBigInteger('grupo');
            $table->unsignedBigInteger('maestro');
            // ------  Llave foranea para grupo y maestro    --------//
            $table->foreign('grupo')->references('id')->on('grupos');
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
        Schema::dropIfExists('maestros_grupo');
    }
};
