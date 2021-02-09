<?php

namespace App;


use Illuminate\Support\Facades\DB;

class facturatienda
{


    protected $fillable = [




        'numFact', 'fecha', 'cod_responsable', 'cod_modalidad'



    ];

    public static function All() {

        return DB::select("SELECT numFact, fecha,cod_responsable,cod_modalidad FROM facturatienda " );


    }



}
