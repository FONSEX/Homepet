<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdendeusosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordendeusos', function (Blueprint $table) {
            $table->increments('cod_orden');
            $table->timestamps();
            $table->integer('cod_producto');
            $table->date('fecha_uso');
            $table->integer('cod_personal');
            $table->integer('cod_servicio');
            $table->integer('cant_producto');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordendeusos');
    }
}
