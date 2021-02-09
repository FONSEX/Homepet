<?php

namespace App\Http\Controllers;
use App\servicioporfacturaservicio;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ServicioporfacturaservicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ServiciosPorFacturaServicio=servicioporfacturaservicio::All();

        return view('products.ServiciosPorFacturaServicio')->with( ['ServiciosPorFacturaServicio'=>$ServiciosPorFacturaServicio]);
    }

    public function create()
    {
        return view('create.ServiciosPorFacturaServicio');
    }

    public function store(Request $request)
    {
        $request->validate(['cod_servicio'=>'required','cod_fact'=>'required']);

        $codS= $request->input('cod_servicio');
        $codF= $request->input('cod_fact');

        DB::insert("INSERT INTO ServiciosPorFacturaServicio (cod_servicio,cod_fact) VALUES ('$codS','$codF')");

        return redirect('/servicioporfacturaservicio');
    }

    public function show($codS,$codF)
    {

    }

    public function edit($codS,$codF)
    {
        $ServiciosPorFacturaServicio=DB::select("SELECT cod_servicio,cod_fact FROM ServiciosPorFacturaServicio WHERE cod_servicio='$codS',cod_fact='$codF' ");
        return view('edit.servicioporfacturaservicio')->with(['servicioporfacturaservicio'=>$ServiciosPorFacturaServicio]);
    }

    public function update(Request $request,$codS,$codF)
    {
        $request->validate(['cod_servicio'=>'required','cod_fact'=>'required']);

        $codS= $request->input('cod_servicio');
        $codF= $request->input('cod_fact');

        DB::update("UPDATE ServiciosPorFacturaServicio SET cod_servicio='$codS',cod_fact='$codF' WHERE cod_servicio='$codS',cod_fact='$codF' ");

        return redirect('/servicioporfacturaservicio');
    }

    public function destroy($codS,$codF)
    {
        DB::delete("DELETE FROM servicioporfacturaservicio WHERE cod_servicio='$codS',cod_fact='$codF' ");
        return back()->with('info','El servicio fue eliminado del sistema');
    }
}
