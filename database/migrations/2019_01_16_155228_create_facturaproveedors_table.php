<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaproveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturaproveedors', function (Blueprint $table) {
            $table->increments('n_fact');
            $table->timestamps();
            $table->date('fecha_factP');
            $table->integer('montoTotalP');
            $table->string('RIF');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturaproveedors');
    }
}
