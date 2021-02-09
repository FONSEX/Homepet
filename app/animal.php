<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class animal
{
    protected $fillable = [

        'cod_animal','nombrea','descripciona'


    ];


    public static function All() {

        return DB::select("SELECT  cod_animal,nombrea,descripciona FROM animal " );
    }



}
