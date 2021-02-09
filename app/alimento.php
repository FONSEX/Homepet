<?php

namespace App;

use Illuminate\Support\Facades\DB;

class alimento
{
    protected $fillable = [

        'cod_alimento','costoalimento','nombrealimento','descripcionalimento'


    ];

    public static function All() {

        return DB::select("SELECT  cod_alimento,costoalimento,nombrealimento,descripcionalimento FROM alimento " );
    }
}
