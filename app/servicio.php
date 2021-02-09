<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class servicio
{
    protected $fillable = [

        'cod_servicio','nombres','disponibilidad','descripcions','cod_personal'


    ];



public static function All() {

    return DB::select("SELECT  cod_servicio,nombres,disponibilidad,descripcions,cod_personal FROM servicio " );
}

}
