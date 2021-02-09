<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Enfermedades_Sufridas_Mascotas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class EnfermedadesSufridasMascotasController extends Controller
{

    public function index()
    {
        $Enfermedades_Sufridas_Mascotas=Enfermedades_Sufridas_Mascotas::All();

        return view('products.Enfermedades_Sufridas_Mascotas')->with( ['Enfermedades_Sufridas_Mascotas'=>$Enfermedades_Sufridas_Mascotas]);
    }

    public function create()
    {
        return view('create.Enfermedades_Sufridas_Mascotas');
    }

    public function store(Request $request)
    {
        $request->validate(['nombreEnf'=>'required','cod_mascota'=>'required']);

        $nombreE= $request->input('nombreEnf');
        $codM= $request->input('cod_mascota');

        DB::insert("INSERT INTO Enfermedades_Sufridas_Mascotas (nombreEnf,cod_mascota) VALUES ('$nombreE','$codM')");

        return redirect('/mascotas');
    }

    public function show($nombreE,$codM)
    {

    }

    public function edit($nombreE,$codM)
    {
        $Enfermedades_Sufridas_Mascotas=DB::select("SELECT nombreEnf,cod_mascota FROM Enfermedades_Sufridas_Mascotas WHERE nombreEnf='$nombreE' and cod_mascota='$codM'" );

        return view('edit.Enfermedades_Sufridas_Mascotas')->with(['Enfermedades_Sufridas_Mascotas'=>$Enfermedades_Sufridas_Mascotas]);
    }

    public function update(Request $request,$nombreE,$codM)
    {
        $request->validate(['nombreEnf'=>'required','cod_mascota'=>'required']);

        $nombreE= $request->input('nombreEnf');
        $codM= $request->input('cod_mascota');

        DB::update("UPDATE Enfermedades_Sufridas_Mascotas SET nombreEnf='$nombreE',cod_mascota='$codM' WHERE nombreEnf='$nombreE' and cod_mascota='$codM' ");

        return redirect('/mascotas');
    }

    public function destroy($nombreE,$codM)
    {
        DB::delete("DELETE FROM Enfermedades_Sufridas_Mascotas WHERE nombreEnf='$nombreE' and cod_mascota='$codM' ");
        return back()->with('info','La enfermedad fue borrada del sistema');
    }
}