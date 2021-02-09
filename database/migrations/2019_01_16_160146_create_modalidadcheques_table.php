<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalidadchequesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalidadcheques', function (Blueprint $table) {
            $table->increments('cod_modalidad');
            $table->timestamps();
            $table->date('fecha_pago');
            $table->integer('monto');
            $table->string('nombre_banco');
            $table->integer('num_cheque');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modalidadcheques');
    }
}
