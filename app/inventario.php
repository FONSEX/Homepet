<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class inventario
{




    protected $fillable = [

        'cod_ajuste', 'fecha_ajuste', 'cod_producto', 'cantidadInv', 'tipoAjuste'


    ];


    public static function All() {

        return DB::select("SELECT cod_ajuste,fecha_ajuste,cod_producto,cantidadInv,tipoAjuste FROM inventario " );


    }




}
