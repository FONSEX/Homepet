<?php

namespace App;


use Illuminate\Support\Facades\DB;

class mascota
{
    protected $fillable = [
        'cod_mascota','cod_raza','nombrem', 'edadm','sexom','pesom','cod_vet', 'fechan', 'cod_responsable'
    ];

    public static function All() {

        return DB::select("SELECT cod_mascota,cod_raza,nombrem, edadm,sexom,pesom,cod_vet,fechan,cod_responsable FROM mascota " );


    }



}

