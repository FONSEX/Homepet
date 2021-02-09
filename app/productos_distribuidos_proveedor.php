<?php

namespace App;

use Illuminate\Support\Facades\DB;

class productos_distribuidos_proveedor
{


    protected $fillable = [



        'RIFProveedor','cod_producto'



    ];


    public static function All() {

        return DB::select("SELECT RIFProveedor,cod_producto FROM productos_distribuidos_proveedor" );


    }



}
