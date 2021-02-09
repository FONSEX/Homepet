<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class personal
{
    protected $fillable = [

        'cod_personal','nombrep','direccionp','telefonop','sueldop'


    ];


    public static function All() {

        return DB::select("SELECT cod_personal,nombrep,direccionp,telefonop,sueldop FROM personal " );


    }
}
