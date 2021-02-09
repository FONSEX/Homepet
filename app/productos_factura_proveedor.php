<?php

namespace App;

use Illuminate\Support\Facades\DB;

class productos_factura_proveedor
{


    protected $fillable = [

        'RIFProveedor','cod_producto', 'cantidad ', 'precio'

    ];


    public static function All() {

        return DB::select("SELECT RIFProveedor,cod_producto,cantidad,precio FROM productos_factura_proveedor" );


    }



}
