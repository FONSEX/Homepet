<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Productos_Distribuidos_Proveedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductosDistribuidosProveedorController extends Controller
{

    public function index()
    {
        $Productos_Distribuidos_Proveedor=Productos_Distribuidos_Proveedor::All();

        return view('products.Productos_Distribuidos_Proveedor')->with( ['Productos_Distribuidos_Proveedor'=>$Productos_Distribuidos_Proveedor]   );
    }

    public function create()
    {
        return view('create.Productos_Distribuidos_Proveedor');
    }

    public function store(Request $request)
    {
        $request->validate(['RIFProveedor'=>'required','cod_producto'=>'required']);

        $rif= $request->input('cod_mascota');
        $cod= $request->input('cod_mascota');

        DB::insert("INSERT INTO Productos_Distribuidos_Proveedor (RIFProveedor,cod_producto) VALUES ('$rif'.'$cod')");

        return redirect('/Productos_Distribuidos_Proveedor');
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $Productos_Distribuidos_Proveedor=DB::select("SELECT RIFProveedor,cod_producto FROM Productos_Distribuidos_Proveedor WHERE RIFProveedor='$rif' and,cod_producto='$cod'" );

        return view('edit.Productos_Distribuidos_Proveedor')->with(['Productos_Distribuidos_Proveedor'=>$Productos_Distribuidos_Proveedor]);
    }

    public function update(Request $request,$rif,$cod)
    {
        $request->validate(['RIFProveedor'=>'required','cod_producto'=>'required']);

        $rif= $request->input('cod_mascota');
        $cod= $request->input('cod_mascota');

        DB::update("UPDATE Productos_Distribuidos_Proveedor SET RIFProveedor='$rif',cod_producto='$cod' WHERE RIFProveedor='$rif',cod_producto='$cod' ");
    }

    public function destroy($rif,$cod)
    {
        DB::delete("DELETE FROM Productos_Distribuidos_Proveedor WHERE RIFProveedor='$rif',cod_producto='$cod' ");
        return back()->with('info','El producto fue borrado del sistema');
    }
}
