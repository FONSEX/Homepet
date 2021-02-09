<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('razas', function (Blueprint $table) {
            $table->increments('cod_raza');
            $table->integer( 'cod_animal');
            $table->string( 'nombrer');
            $table->string( 'descripcionr');
            $table->string( 'paisorigen');
            $table->dom_inteligencia( 'nivel_inteligencia');
            $table->dom_contextura( 'contextura_fuerte');
            $table->integer( 'altura_min');
            $table->integer( 'altura_max');
            $table->integer( 'porcion_diaria');
            $table->dom_talla( 'talla');
            $table->string( 'color_pelaje');
            $table->integer( 'cod_alimento');

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
        Schema::dropIfExists('razas');
    }
}
