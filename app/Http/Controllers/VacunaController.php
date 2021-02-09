<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Vacuna;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class VacunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Vacuna=Vacuna::All();

        return view('products.Vacuna')->with( ['Vacuna'=>$Vacuna]);
    }

    public function create()
    {
        return view('create.Vacuna');
    }
    public function store(Request $request)
    {
        $request->validate(['cod_vacuna'=>'required','montoVacuna'=>'required','nombreVacuna'=>'required','descripcionVacuna'=>'required']);

        $cod= $request->input('cod_vacuna');
        $monto= $request->input('montoVacuna');
        $nombre= $request->input('nombreVacuna');
        $des= $request->input('descripcionVacuna');

        DB::insert("INSERT INTO Vacuna (cod_vacuna,montoVacuna,nombreVacuna,descripcionVacuna) VALUES ('$cod','$monto','$nombre','$des')");

        return redirect('/mascotas');
    }

    public function show($cod)
    {

    }

    public function edit($cod)
    {
        $Vacuna=DB::selct("SELECT cod_vacuna,montoVacuna,nombreVacuna,descripcionVacuna FROM Vacuna WHERE cod_vacuna='$cod");

        return view('edit.Vacuna')->with(['Vacuna'=>$Vacuna]);
    }

    public function update(Request $request,$cod)
    {
        $request->validate(['cod_vacuna'=>'required','montoVacuna'=>'required','nombreVacuna'=>'required','descripcionVacuna'=>'required']);

        $cod= $request->input('cod_vacuna');
        $monto= $request->input('montoVacuna');
        $nombre= $request->input('nombreVacuna');
        $des= $request->input('descripcionVacuna');

        DB::update("UPDATE Vacuna set cod_vacuna='$cod',montoVacuna='$monto',nombreVacuna='$nombre',descripcionVacuna='$des' ");

        return redirect('/mascotas');
    }

    public function destroy($cod)
    {
        DB::delete("DELETE FROM Vacuna WHERE cod_vacuna='$cod' ");
        return back()->with('info','La vacuna fue eliminada del sistema');
    }
}
