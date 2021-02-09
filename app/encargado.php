<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class encargado
{
    protected $fillable = [

        'cod_encargado','nombree','direccione','telefonoe','sueldoe','tiempo_encargado'

    ];

    public static function All() {

        return DB::select("SELECT cod_encargado,nombree,direccione,telefonoe,sueldoe,tiempo_encargado FROM encargado " );


    }


}
