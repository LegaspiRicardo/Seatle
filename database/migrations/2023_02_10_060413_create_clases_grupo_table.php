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
        Schema::create('clases_grupo', function (Blueprint $table) {
            $table->unsignedBigInteger('grupo');
            $table->timestamp('inicio')->nullable();
            $table->timestamp('fin')->nullable();
            // ------  Llave foranea para grupo   --------//
            $table->foreign('grupo')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clases_grupo');
    }
};
