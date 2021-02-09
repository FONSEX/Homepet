<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\vacunas_Aplicadas_Mascotas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VacunasAplicadasMascotasController extends Controller
{

    public function index()
    {
        $Vacunas_Aplicadas_Mascotas=Vacunas_Aplicadas_Mascotas::All();

        return view('products.Vacunas_Aplicadas_Mascotas')->with( ['Vacunas_Aplicadas_Mascotas'=>$Vacunas_Aplicadas_Mascotas]   );
    }

    public function create()
    {
        return view('create.Vacunas_Aplicadas_Mascotas');
    }

    public function store(Request $request)
    {
        $request->validate(['fechaAplicacion'=>'required','cod_vacuna'=>'required','cod_mascota'=>'required']);

        $fechaA= $request->input('fechaAplicacion');
        $codV= $request->input('cod_vacuna');
        $codM= $request->input('cod_mascota');

        DB::insert("INSERT INTO Vacunas_Aplicadas_Mascotas (fechaAplicacion,cod_vacuna,cod_mascota) VALUES ('$fechaA','$codV','$codM')");

        return redirect('/mascotas');
    }

    public function show($codV,$codM)
    {

    }

    public function edit($codV,$codM)
    {
        $Vacunas_Aplicadas_Mascotas=DB::select("SELECT fechaAplicacion,cod_vacuna,cod_mascota FROM Vacunas_Aplicadas_Mascotas WHERE cod_vacuna'$codV' and cod_mascota='$codM'" );

        return view('edit.Vacunas_Aplicadas_Mascotas')->with(['Vacunas_Aplicadas_Mascotas'=>$Vacunas_Aplicadas_Mascotas]);
    }

    public function update(Request $request,$codV,$codM)
    {
        $request->validate(['fechaAplicacion'=>'required','cod_vacuna'=>'required','cod_mascota'=>'required']);

        $fechaA= $request->input('fechaAplicacion');
        $codV= $request->input('cod_vacuna');
        $codM= $request->input('cod_mascota');

        DB::update("UPDATE Vacunas_Aplicadas_Mascotas SET fechaAplicacion='$fechaA',cod_vacuna='$codV',cod_mascota='$codM' WHERE cod_vacuna='$codV' and cod_mascota='$codM' ");

		return redirect('/mascotas');
    }

    public function destroy($codV,$codM)
    {
        DB::delete("DELETE FROM Vacunas_Aplicadas_Mascotas WHERE cod_vacuna='$codV' and cod_mascota='$codM' ");
        return back()->with('info','La vacuna fue borrado del sistema');
    }
}