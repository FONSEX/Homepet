<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class responsable
{


    protected $fillable = [

        'cod_responsable','nombrer','emailr'


    ];

    public static function All() {

        return DB::select("SELECT  cod_responsable,nombrer,emailr FROM responsable " );
    }




}
