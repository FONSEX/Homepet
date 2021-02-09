<?php

namespace App;

use Illuminate\Support\Facades\DB;

class modalidadcheque
{


    protected $fillable = [

        'cod_modalidad', 'fecha_pago', 'monto', 'nombre_banco', 'num_cheque'


    ];


    public static function All() {

        return DB::select("SELECT cod_modalidad,fecha_pago,monto,nombre_banco,num_cheque FROM modalidadcheque " );


    }



}
