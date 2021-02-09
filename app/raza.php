<?php

namespace App;
use Illuminate\Support\Facades\DB;


class raza
{

    protected $fillable = [
        'cod_raza','cod_animal', 'nombrer', 'descripcionr','paisorigen' , 'nivel_inteligencia' ,'contextura_fuerte' ,'altura_min' , 'altura_max' ,'porcion_diaria' ,'talla','color_pelaje' ,'cod_alimento'
    ];


    public static function All() {

        return DB::select("SELECT cod_raza,cod_animal, nombrer, descripcionr,paisorigen , nivel_inteligencia ,contextura_fuerte ,altura_min , altura_max ,porcion_diaria ,talla,color_pelaje ,cod_alimento  FROM raza" );


    }




}
