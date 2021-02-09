<?php

namespace App;

use Illuminate\Support\Facades\DB;

class facturaservicio
{

    protected $fillable = [




        'cod_fact', 'cod_personal', 'fecha_fact', 'monto_fact', 'cod_modalidad'



    ];

    public static function All() {

        return DB::select("SELECT cod_fact, cod_personal,fecha_fact,monto_fact,cod_modalidad FROM facturaservicio " );


    }



}
