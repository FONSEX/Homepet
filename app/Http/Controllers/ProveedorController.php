<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Proveedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProveedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Proveedor=Proveedor::All();

        return view('products.Proveedor')->with( ['Proveedor'=>$Proveedor]);
    }

    public function create()
    {
        return view('create.Proveedor');
    }

    public function store(Request $request)
    {
        $request->validate(['RIFProveedor'=>'required','nombreProv'=>'required','direccionProv'=>'required','telefonoLocalProv'=>'required','telefonoCelularProv'=>'required','personaContacto'=>'required']);

        $rif= $request->input('RIFProveedor');
        $nombre= $request->input('nombreProv');
        $dir= $request->input('direccionProv');
        $local= $request->input('telefonoLocalProv');
        $celular= $request->input('telefonoCelularProv');
        $contacto= $request->input('personaContacto');

        DB::insert("INSERT INTO Proveedor (RIFProveedor,nombreProv,direccionProv,telefonoLocalProv,telefonoCelularProv,personaContacto) VALUES ('$rif','$nombre','$dir','$local','$celular','$contacto')");

        return redirect('/alimento');
    }

    public function show($id)
    {

    }

    public function edit($rif)
    {
        $Proveedor=DB::select("SELECT RIFProveedor,nombreProv,direccionProv,telefonoLocalProv,telefonoCelularProv,personaContacto FROM Proveedor WHERE RIFProveedor='$rif");

        return view('edit.Proveedor')->with(['Proveedor'=>$Proveedor]);
    }

    public function update(Request $request,$rif)
    {
        $request->validate(['RIFProveedor'=>'required','nombreProv'=>'required','direccionProv'=>'required','telefonoLocalProv'=>'required','telefonoCelularProv'=>'required','personaContacto'=>'required']);

        $rif= $request->input('RIFProveedor');
        $nombre= $request->input('nombreProv');
        $dir= $request->input('direccionProv');
        $local= $request->input('telefonoLocalProv');
        $celular= $request->input('telefonoCelularProv');
        $contacto= $request->input('personaContacto');

        DB::update("UPDATE Proveedor SET RIFProveedor='$rif',nombreProv='$nombre',direccionProv='$dir',telefonoLocalProv='$local',telefonoCelularProv='$celular',personaContacto='$contacto' WHERE RIFProveedor='$rif' ");

        return redirect('/alimento');
    }

    public function destroy($rif)
    {
        DB::delete("DELETE FROM Proveedor WHERE RIFProveedor='$rif' ");
        return back()->with('info','El proveedor fue borrado del sistema');
    }
}
