<?php

namespace App;

use Illuminate\Support\Facades\DB;

class modalidadefectivo
{

    protected $fillable = [

        'cod_modalidad', 'fecha_pagoE', 'montoE'




    ];


    public static function All() {

        return DB::select("SELECT cod_modalidad,fecha_pagoE,montoE FROM modalidadefectivo " );


    }


}
