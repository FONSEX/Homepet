<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosFacturaProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_factura_proveedors', function (Blueprint $table) {
            $table->increments('RIFProveedor','cod_producto');
            $table->timestamps();
            $table->integer('cantidad ');
            $table->float('precio');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_factura_proveedors');
    }
}
