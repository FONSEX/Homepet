<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Producto=Producto::All();

        return view('products.Producto')->with( ['Producto'=>$Producto]);
    }

    public function create()
    {
        return view('create.Producto');
    }

    public function store(Request $request)
    {
        $request->validate(['cod_producto'=>'required','descripcionP'=>'required','costoP'=>'required','nombreP'=>'required']);

        $cod= $request->input('cod_producto');
        $des= $request->input('descripcionP');
        $costo= $request->input('costoP');
        $nombre= $request->input('nombreP');

        DB::insert("INSERT INTO Producto (cod_producto,descripcionP,costoP,nombreP) VALUES ('$cod','$des','$costo','$nombre') ");

        return redirect('/alimento');
    }

    public function show($id)
    {

    }

    public function edit($cod)
    {
        $Producto=DB::select("SELECT cod_producto,descripcionP,costoP,nombreP FROM Producto WHERE cod_producto='$cod' ");

        return view('edit.Producto')->with(['Producto'=>$Producto]);
    }

    public function update(Request $request,$cod)
    {
        $request->validate(['cod_producto'=>'required','descripcionP'=>'required','costoP'=>'required','nombreP'=>'required']);

        $cod= $request->input('cod_producto');
        $des= $request->input('descripcionP');
        $costo= $request->input('costoP');
        $nombre= $request->input('nombreP');

        DB::UPDATE("UPDATE Producto set cod_producto='$cod',descripcionP='$des',costoP='$costo',nombreP='$nombre' WHERE cod_producto='$cod' ");

        return redirect('/alimento');
    }

    public function destroy($cod)
    {
        DB::delete("DELETE FROM Producto WHERE cod_producto='$cod' ");
        return back()->with('info','El producto fue eliminado del sistema');
    }
}
