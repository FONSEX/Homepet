<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\TelefonosResponsables;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class TelefonosResponsablesController extends Controller
{

    public function index()
    {
        $TelefonosResponsables=TelefonosResponsables::All();

        return view('products.TelefonosResponsables')->with( ['TelefonosResponsables'=>$TelefonosResponsables]);
    }

    public function create()
    {
        return view('create.TelefonosResponsables');
    }

    public function store(Request $request)
    {
        $request->validate(['cod_responsable'=>'required','Ntelefono'=>'required']);

        $codR= $request->input('cod_responsable');
        $numT= $request->input('Ntelefono');

        DB::insert("INSERT INTO TelefonosResponsables (cod_responsable,Ntelefono) VALUES ('$codR','$numT')");

        return redirect('/mascotas');
    }

    public function show($codR,$numT)
    {

    }

    public function edit($codR,$numT)
    {
        $TelefonosResponsables=DB::select("SELECT cod_responsable,Ntelefono FROM TelefonosResponsables WHERE cod_responsable='$codR' and Ntelefono='$numT' ");

        return view('edit.TelefonosResponsables')->with(['TelefonosResponsables'=>$TelefonosResponsables]);
    }

    public function update(Request $request,$codR,$numT)
    {
        $request->validate(['cod_responsable'=>'required','Ntelefono'=>'required']);

        $codR= $request->input('cod_responsable');
        $numT= $request->input('Ntelefono');

        DB::update("UPDATE TelefonosResponsables SET cod_responsable='$codR',Ntelefono='$numT' WHERE cod_responsable='$codR' and Ntelefono='$numT' ");

        return redirect('/mascotas');
    }

    public function destroy($codR,$numT)
    {
        DB::delete("DELETE FROM TelefonosResponsables WHERE cod_responsable='$codR' and Ntelefono='$numT' ");
        return back()->with('info','El telefono fue borrado del sistema');
    }
}