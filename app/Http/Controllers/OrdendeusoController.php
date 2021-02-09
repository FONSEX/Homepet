<?php

namespace App\Http\Controllers;

use App\ordendeuso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdendeusoController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $OrdenDeUSo=ordendeuso::All();

        return view('products.ordendeuso')->with(['ordendeuso'=>$OrdenDeUSo]);
    }

    public function create()
    {
        return view('create.ordendeuso');
    }

    public function store(Request $request)
    {
        $request->validate(['cod_orden'=>'required','cod_producto'=>'required','fecha_uso'=>'required','cod_personal'=>'required','cod_servicio'=>'required','cant_producto'=>'required']);

        $codO= $request->input('cod_orden');
        $codPr= $request->input('cod_producto');
        $fechaU= $request->input('fecha_uso');
        $codPe= $request->input('cod_personal');
        $codS= $request->input('cod_servicio');
        $cantP= $request->input('cant_producto');

        DB::insert("INSERT INTO OrdenDeUSo (cod_orden,cod_producto,fecha_uso,cod_personal,cod_servicio,cant_producto) VALUES ('$codO','$codPr','$fechaU','$codPe','$codS','$cantP') ");

        return redirect('/servicio');
    }

    public function show($codO)
    {

    }

    public function edit($codO)
    {
        $OrdenDeUSo=DB::select("SELECT cod_orden,cod_producto,fecha_uso,cod_personal,cod_servicio,cant_producto FROM OrdenDeUSo WHERE cod_orden='$codO'");

        return view('edit.OrdenDeUSo')->with(['OrdenDeUSo'=>$OrdenDeUSo]);
    }

    public function update(Request $Request,$codO)
    {
        $Request->validate(['cod_producto'=>'required','fecha_uso'=>'required','cod_personal'=>'required','cod_servicio'=>'required','cant_producto'=>'required'
        ]);


        $codPr= $Request->input('cod_producto');
        $fechaU= $Request->input('fecha_uso');
        $codPe= $Request->input('cod_personal');
        $codS= $Request->input('cod_servicio');
        $cantP= $Request->input('cant_producto');

        DB::UPDATE("UPDATE OrdenDeUSo set cod_producto='$codPr',fecha_uso='$fechaU',cod_personal='$codPe',codS='$codS',cant_producto='$cantP' where cod_orden='$codO' ");

        return redirect('/servicio');
    }

    public function destroy($codO)
    {
        DB::delete("DELETE FROM OrdenDeUSo WHERE cod_orden='$codO' ");
        return back()->with('info','La orden ha sido eliminada del sistema');
    }


}
