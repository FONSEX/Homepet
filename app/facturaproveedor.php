<?php

namespace App;

use Illuminate\Support\Facades\DB;

class facturaproveedor
{


    protected $fillable = [

        'n_fact', 'fecha_factP', 'montoTotalP', 'RIF'



    ];

    public static function All() {

        return DB::select("SELECT n_fact, fecha_factP, montoTotalP, RIF FROM facturaproveedor " );


    }





}
