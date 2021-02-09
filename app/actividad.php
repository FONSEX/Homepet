<?php

namespace App;

use Illuminate\Support\Facades\DB;

class actividad
{


    protected $fillable = [

        'Num_act','cod_servicio','Descripcionact','Capacidad_Atencion'


    ];

    public static function All() {

        return DB::select("SELECT  Num_act,cod_servicio,Descripcionact,Capacidad_Atencion FROM actividad " );
    }



}
