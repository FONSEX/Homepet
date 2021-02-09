<?php

namespace App\Http\Controllers;

use App\reserva;
use Illuminate\Http\Request;
use App\ficharegistro;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {

     $reserva=reserva::All();
     $ficharegistro=ficharegistro::All();

        return view('products.reserva')->with( ['reserva'=>$reserva,'ficharegistro'=>$ficharegistro]);

    }


    public function create()
    {
        return view('create.Reserva');
    }

    public function store(Request $Request)
    {
        $Request->validate(['num_reserva'=>'required','fecha_reservacion'=>'required','monto_abonado'=>'required','fecha_act'=>'required','cod_servicio'=>'required']);

        $numR= $Request->input('num_reserva');
        $fechaR= $Request->input('fecha_reservacion');
        $montoA= $Request->input('monto_abonado');
        $fechaA= $Request->input('fecha_act');
        $codS= $Request->input('cod_servicio');

        DB::insert("INSERT INTO Reserva (num_reserva,fecha_reservacion,monto_abonado,fecha_act,cod_servicio) VALUES ('$numR','$fechaR','$montoA','$fechaA','$codS')");

        return redirect('/reserva');
    }

    public function show($num_reserva)
    {

    }

    public function edit($num_reserva)
    {
        $Reserva=DB::select("SELECT num_reserva,fecha_reservacion,monto_abonado,fecha_act,cod_servicio FROM Reserva WHERE num_reserva='$numR");

        return view('edit.Reserva')->with(['Reserva'=>$Reserva]);
    }

    public function update(Request $Request,$numR)
    {
        $Request->validate(['num_reserva'=>'required','fecha_reservacion'=>'required','monto_abonado'=>'required','fecha_act'=>'required','cod_servicio'=>'required']);
        $numR= $Request->input('num_reserva');
        $fechaR= $Request->input('fecha_reservacion');
        $montoA= $Request->input('monto_abonado');
        $fechaA= $Request->input('fecha_act');
        $codS= $Request->input('cod_servicio');

        DB::update("UPDATE Reserva set num_reserva='$numR',fecha_reservacion='fechaR',monto_abonado='$montoA',fecha_act='$fechaA',cod_servicio='$codS' ");

        return redirect('/reserva');
    }

    public function destroy($numR)
    {
        DB::delete("DELETE FROM Reserva WHERE num_reserva='$numR' ");
        return back()->with('info','La reserva fue eliminada del sistema');
    }










}
