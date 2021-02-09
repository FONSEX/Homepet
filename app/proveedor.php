<?php

namespace App;

use Illuminate\Support\Facades\DB;

class proveedor
{


    protected $fillable = [


        'RIFProveedor', 'nombreProv', 'direccionProv','telefonoLocalProv','telefonoCelularProv','personaContacto'


    ];


    public static function All() {

        return DB::select("SELECT RIFProveedor,nombreProv,direccionProv,telefonoLocalProv,telefonoCelularProv,personaContacto FROM proveedor" );


    }



}
