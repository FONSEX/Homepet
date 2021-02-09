<?php

namespace App;


use Illuminate\Support\Facades\DB;

class ficharegistro
{


    protected $fillable = [




        'cod_ficha', 'cod_mascota', 'cod_servicio', 'autorizado', 'fechaEnt', 'horaEnt', 'horaSe', 'fechaSr', 'horaSr', 'fechaSe'



    ];

    public static function All() {

        return DB::select("SELECT cod_ficha, cod_mascota, cod_servicio, autorizado, fechaEnt,horaEnt,horaSe, fechaSr, horaSr, fechaSe FROM ficharegistro " );


    }



}
