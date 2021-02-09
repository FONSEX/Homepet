<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFicharegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficharegistros', function (Blueprint $table) {
            $table->increments('cod_ficha');
            $table->timestamps();
            $table->integer('cod_mascota');
            $table->integer('cod_servicio');
            $table->string('autorizado');
            $table->date('fechaEnt');
            $table->time('horaEnt');
            $table->time('horaSe');
            $table->date('fechaSr');
            $table->time('horaSr');
            $table->date('fechaSe');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficharegistros');
    }
}
