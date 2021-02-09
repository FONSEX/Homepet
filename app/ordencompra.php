<?php

namespace App;

use Illuminate\Support\Facades\DB;

class ordencompra
{
    protected $fillable = [



        'cod_compra', 'fechaComp', 'RIF'


    ];


    public static function All() {

        return DB::select("SELECT  cod_compra, fechaComp RIF FROM ordencompra " );


    }
}
