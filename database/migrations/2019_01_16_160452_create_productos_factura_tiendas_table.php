<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosFacturaTiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_factura_tiendas', function (Blueprint $table) {
            $table->increments('cod_producto','numFact');
            $table->timestamps();
            $table->integer('cantidad');
            $table->float('precio');
            $table->integer('descuento');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_factura_tiendas');
    }
}
