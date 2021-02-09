<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacunaporrazasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacunaporrazas', function (Blueprint $table) {
            $table->increments('cod_vacuna ','cod_raza');
            $table->integer('edadMin');
            $table->integer('edadMax');
            $table->float('dosis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacunaporrazas');
    }
}
