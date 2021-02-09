<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturatiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturatiendas', function (Blueprint $table) {
            $table->increments('numFact');
            $table->timestamps();
            $table->date('fecha');
            $table->integer('cod_responsable');
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
        Schema::dropIfExists('facturatiendas');
    }
}
