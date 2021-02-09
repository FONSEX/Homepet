<?php

namespace App;

use Illuminate\Support\Facades\DB;

class relacionesmascota
{
    protected $fillable = [


        'cod_mascota','cod_mascotaRelacion', 'parentesco'


    ];


    public static function All() {

        return DB::select("SELECT cod_mascota,cod_mascotaRelacion,parentesco  FROM relacionesmascota" );


    }
}
