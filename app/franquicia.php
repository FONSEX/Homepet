<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class franquicia
{
    protected $fillable = [

        'rif','ciudad','especializacion','capacidad','cod_encargado'


    ];


    public static function All() {

        return DB::select("SELECT rif,ciudad,especializacion,capacidad,cod_encargado FROM franquicia " );


    }





}
