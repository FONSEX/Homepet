<?php

namespace App;

use Illuminate\Support\Facades\DB;

class ordendeuso
{



    protected $fillable = [



       'cod_orden', 'cod_producto', 'fecha_uso', 'cod_personal', 'cod_servicio','cant_producto'



];


    public static function All() {

        return DB::select("SELECT  cod_orden, cod_producto, fecha_uso, cod_personal, cod_servicio,cant_producto FROM ordendeuso" );


    }



}
