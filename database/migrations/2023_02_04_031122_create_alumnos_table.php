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
        Schema::create('alumnos', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nombres', 100);
            $table->string('apellido_pat', 100);
            $table->string('apellido_mat', 100)->nullable();
            $table->string('sexo', 10)->nullable();
            $table->timestamp('fecha_nac')->nullable();
            $table->unsignedBigInteger('tutor');
            $table->string('calle', 100);
            $table->string('numero', 10);
            $table->string('colonia',100);
            $table->string('cp', 6);
            $table->string('comentarios', 255)->nullable();
            $table->timestamp('fecha_ing')->nullable();
            $table->unsignedBigInteger('nivel');
            $table->string('alberca', 100);
            $table->string('status', 20);
            // ------  Llave foranea para tutor y niveles    --------//
            $table->foreign('tutor')->references('id')->on('tutors');
            $table->foreign('nivel')->references('id')->on('nivels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
