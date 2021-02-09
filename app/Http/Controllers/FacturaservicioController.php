<?php

namespace App\Http\Controllers;

use App\facturaservicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\productos_factura_tienda;
use App\facturatienda;
use App\facturaproveedor;

class FacturaservicioController extends Controller
{

    public function index()
    {



        $facturaservicio=facturaservicio::All();
        $productos_factura_tienda=productos_factura_tienda::All();
        $facturatienda=facturatienda::All();
        $facturaproveedor=facturaproveedor::All();

        return view('products.pagos')->with(['facturaservicio'=>$facturaservicio,'productos_factura_tienda'=>$productos_factura_tienda , 'facturatienda'=>$facturatienda ,'facturaproveedor'=>$facturaproveedor   ]) ;

    }


    public function create()
    {
        return view('create.facturaservicio');
    }

    public function store(Request $Request)
    {
        $Request->validate([
            'cod_personal'=>'required',
            'cod_fact'=>'required',
            'fecha_fact'=>'required',
            'monto_fact'=>'required',
            'cod_modalidad'=>'required',
        ]);

        $codP= $Request->input('cod_personal');
        $codF= $Request->input('cod_fact');
        $fechaF= $Request->input('fecha_fact');
        $montoF= $Request->input('monto_fact');
        $codM= $Request->input('cod_modalidad');

        DB::insert("INSERT INTO facturaservicio (cod_personal,cod_fact,fecha_fact,monto_fact,cod_modalidad) VALUES ('$codP','$codF','$fechaF','$montoF','$codM')");

        return redirect('/facturaservicio');
    }

    public function show($codF)
    {

    }

    public function edit($codF)
    {
        $facturaservicio=DB::select("SELECT cod_personal,cod_fact,fecha_fact,monto_fact,cod_modalidad FROM facturaservicio WHERE cod_fact='$codF'");

        return view('edit.facturaservicio')->with(['facturaservicio'=>$facturaservicio]);
    }

    public function update(Request $Request,$codF)
    {
        $Request->validate(['cod_personal'=>'required','fecha_fact'=>'required','monto_fact'=>'required','cod_modalidad'=>'required']);

        $codP= $Request->input('cod_personal');

        $fechaF= $Request->input('fecha_fact');
        $montoF= $Request->input('monto_fact');
        $codM= $Request->input('cod_modalidad');

        DB::UPDATE("UPDATE facturaservicio set cod_personal='$codP',fecha_fact='$fechaF',monto_fact='$montoF',cod_modalidad='$codM' ");

        return rediect('/facturaservicio');
    }

    public function destroy($codF)
    {
        DB::detele("DELETE FROM facturaservicio WHERE cod_fact='$codF'");

        return back()->with('info','La factura fue eliminada del sistema');
    }








}
