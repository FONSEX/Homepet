<?php

namespace App;

use Illuminate\Support\Facades\DB;

class producto
{


    protected $fillable = [



        'cod_producto', 'descripcionP', 'costoP ', 'nombreP'



    ];


    public static function All() {

        return DB::select("SELECT cod_producto, descripcionP, costoP , nombreP FROM producto" );


    }
}
