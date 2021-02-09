<?php

namespace App;

use Illuminate\Support\Facades\DB;

class productos_orden_compra
{
    protected $fillable = [


        'cod_producto','cod_compra', 'cantidad'


    ];


    public static function All() {

        return DB::select("SELECT cod_producto,cod_compra,cantidad FROM productos_orden_compra" );


    }
}
