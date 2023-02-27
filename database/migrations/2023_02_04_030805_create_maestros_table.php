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
        Schema::create('maestros', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->integer('telefono')->nullable();
            $table->timestamp('fecha_nac')->nullable();
            $table->timestamp('fecha_ing')->nullable();
            $table->string('alberca',60);
            $table->string('clave',60)->nullable();
            $table->string('clave1',60)->nullable();
            $table->string('status',20)->nullable();
            $table->string('comentarios', 255)->nullable();
            $table->string('color', 20)->nullable();
            $table->string('img', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maestros');
    }
};
