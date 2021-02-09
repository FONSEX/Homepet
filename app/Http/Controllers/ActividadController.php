<?php

namespace App\Http\Controllers;

use App\actividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



Class ActividadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $actividad=Actividad::All();
        return view('products.actividad')->with(['actividad'=>$actividad]);
	}

    public function create()
    {
        return view('create.actividad');
    }

    public function store(Request $request)
    {
        $request->validate(['Num_act'=>'required','cod_servicio'=>'required','Descripcionact'=>'required','Capacidad_Atencion'=>'required']);

        $numAct= $request->input('Num_act');
        $idS= $request->input('cod_servicio');
        $des= $request->input('Descripcionact');
        $CapAt= $request->input('Capacidad_Atencion');

        DB::insert("INSERT INTO Actividad (Num_act,cod_servicio,Descripcionact,Capacidad_Atencion) VALUES ($numAct,$idS,$des,$CapAt)");
        return redirect('/servicio');






    }



    public function  show($numAct)
    {

    }

    public function edit(Request $request)
    {

        $idS= $request->input('cod_servicio');
        $idNa= $request->input('Num_act');


        $actividad=DB::select("SELECT Num_act,cod_servicio,Descripcionact,Capacidad_Atencion FROM Actividad WHERE Num_act='$idNa' and cod_servicio='$idS' ");

        return view('edit.Actividad')->with(['actividad'=>$actividad]);
    }

    public function update(Request $request,$numAct)
    {
        $request->validate(['numAct'=>'required','cod_servicio'=>'required','Descripcionact'=>'required','Capacidad_Atencion'=>'required']);


        $idS= $request->input('cod_servicio');
        $des= $request->input('Descripcionact');
        $CapAt= $request->input('Capacidad_Atencion');

        DB::UPDATE("UPDATE Actividad set Num_act='$numAct',cod_servicio=>'$idS',Descripcionact=>'$des',Capacidad_Atencion=>'$CapAt'");

        return redirect('/servicio');
    }

    public function destroy($idS,$numAct)
    {
        DB::delete("DELETE FROM Actividad WHERE Num_act='$numAct' and cod_servicio='$idS'");
        return back()->with('info','Ha sido eliminada la actividad');
	}
}