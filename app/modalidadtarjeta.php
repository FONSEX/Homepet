<?php

namespace App;

use Illuminate\Support\Facades\DB;

class modalidadtarjeta
{
    protected $fillable = [

        'cod_modalidad', 'fecha_pagoT', 'montoT','nombreBancoT', 'num_tarjeta'


    ];


    public static function All() {

        return DB::select("SELECT cod_modalidad,fecha_pagoT,montoT,nombreBancoT,num_tarjeta FROM modalidadtarjeta " );


    }
}
