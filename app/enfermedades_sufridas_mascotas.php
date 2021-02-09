<?php

namespace App;


use Illuminate\Support\Facades\DB;

class enfermedades_sufridas_mascotas
{


    protected $fillable = [

        'nombreEnf', 'cod_mascota'

    ];

    public static function All() {

        return DB::select("SELECT nombreEnf, cod_mascota FROM enfermedades_sufridas_mascotas " );


    }


}
