<?php

namespace App;

use Illuminate\Support\Facades\DB;

class reserva
{
    protected $fillable = [


        'num_reserva','cod_servicio', 'fecha_reservacion', 'fecha_act', 'monto_abonado'


    ];


    public static function All() {

        return DB::select("SELECT num_reserva,cod_servicio,fecha_reservacion,fecha_act,monto_abonado  FROM reserva" );


    }
}
