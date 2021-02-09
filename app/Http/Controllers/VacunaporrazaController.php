<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\VacunaPorRaza;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class VacunaPorRazaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $VacunaPorRaza=VacunaPorRaza::All();

        return view('products.VacunaPorRaza')->with( ['VacunaPorRaza'=>$VacunaPorRaza]);
    }

    public function create()
    {
        return view('create.VacunaPorRaza');
    }

    public function store(Request $request)
    {
        $request->validate(['cod_vacuna'=>'required','cod_raza'=>'required','edadMin'=>'required','edadMax'=>'required','dosis'=>'required']);

        $codV= $request->input('cod_vacuna');
        $codR= $request->input('cod_raza');
        $eMin= $request->input('edadMin');
        $eMax= $request->input('edadMax');
        $d= $request->input('dosis');

        DB::insert("INSERT INTO VacunaPorRaza (cod_vacuna,cod_raza,edadMin,edadMax,dosis) VALUES('$codV','$codR','$eMin','$eMax','$d')");

        return redirect('/mascotas');
    }

    public function show($codV,$codR)
    {

    }

    public function edit($codV,$codR)
    {
        $VacunaPorRaza=DB::select("SELECT cod_vacuna,cod_raza,edadMin,edadMax,dosis FROM VacunaPorRaza WHERE cod_vacuna='$codV'and cod_raza='$codR' ");

        return view('edit.VacunaPorRaza')->with(['VacunaPorRaza'=>$VacunaPorRaza]);
    }

    public function update(Request $request,$codV,$codR)
    {
        $request->validate(['cod_vacuna'=>'required','cod_raza'=>'required','edadMin'=>'required','edadMax'=>'required','dosis'=>'required']);

        $codV= $request->input('cod_vacuna');
        $codR= $request->input('cod_raza');
        $eMin= $request->input('edadMin');
        $eMax= $request->input('edadMax');
        $d= $request->input('dosis');

        DB::update("SELECT VacunaPorRaza SET cod_vacuna='$codV',cod_raza='$codR',edadMin='$eMin',edadMax='$eMax',dosis='$d' WHERE cod_vacuna='$codV' and cod_raza='$codR' ");

        return redirect('/mascotas');
    }

    public function destroy($codV,$codR)
    {
        DB::delete("DELETE FROM NOMBRETABLA WHERE cod_vacuna='$codV' and cod_raza='$codR' ");
        return back()->with('info','la vacuna fue eliminada del sistema');
    }
}
