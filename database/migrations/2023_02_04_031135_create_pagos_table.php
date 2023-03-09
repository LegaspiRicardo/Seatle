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
        Schema::create('pagos', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('alumno');
            $table->string('tipo_clase', 100);
            $table->integer('precio_clase');
            $table->integer('num_clases');
            $table->integer('total');
            // ------  Llave foranea para alumno    ------------//
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
        Schema::dropIfExists('pagos');
    }
};
