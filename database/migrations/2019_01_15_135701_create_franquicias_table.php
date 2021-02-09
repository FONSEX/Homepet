<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranquiciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franquicias', function (Blueprint $table) {
            $table->increments('rif');
            $table->string('ciudad');
            $table->string('especializacion');
            $table->integer('capacidad');
            $table->string('cod_encargado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('franquicias');
    }
}
