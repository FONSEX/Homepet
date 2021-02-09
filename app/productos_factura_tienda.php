<?php

namespace App;

use Illuminate\Support\Facades\DB;

class productos_factura_tienda
{
    protected $fillable = [



        'cod_producto','numFact','cantidad', 'precio','descuento'



    ];


    public static function All() {

        return DB::select("SELECT cod_producto,numFact,cantidad,precio,descuento FROM productos_factura_tienda" );


    }
}
