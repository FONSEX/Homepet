<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalidadtarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalidadtarjetas', function (Blueprint $table) {
            $table->increments('cod_modalidad');
            $table->timestamps();
            $table->date('fecha_pagoT');
            $table->integer('montoT');
            $table->string('nombreBancoT');
            $table->integer('num_tarjeta');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modalidadtarjetas');
    }
}
