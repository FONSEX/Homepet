<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaserviciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturaservicios', function (Blueprint $table) {
            $table->increments('cod_fact');
            $table->timestamps();
            $table->integer('cod_personal');
            $table->date('fecha_fact');
            $table->integer('monto_fact');
            $table->integer('cod_modalidad');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturaservicios');
    }
}
