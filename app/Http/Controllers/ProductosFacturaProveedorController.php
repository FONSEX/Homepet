<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Productos_Factura_Proveedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProductosFacturaProveedorController extends Controller
{

    public function index()
    {
        $Productos_Factura_Proveedor=Productos_Factura_Proveedor::All();

        return view('products.Productos_Factura_Proveedor')->with(['Productos_Factura_Proveedor'=>$Productos_Factura_Proveedor]);
    }

    public function create()
    {
        return view('create.Productos_Factura_Proveedor');
    }

    public function store(Request $request)
    {
        $request->validate(['RIFProveedor'=>'required','cod_producto'=>'required','cantidad'=>'required','precio'=>'required']);


        $rif= $request->input('RIFProveedor');
        $codP= $request->input('cod_producto');
        $cant= $request->input('cantidad');
        $price= $request->input('precio');

        DB::insert("INSERT INTO Productos_Factura_Proveedor (RIFProveedor,cod_producto,cantidad,precio) VALUES ('$rif','$codP','$cant','$price')");

        return redirect('/alimento');
    }

    public function show($rif,$codP)
    {

    }

    public function edit($rif,$codP)
    {
        $Productos_Factura_Proveedor=DB::select("SELECT RIFProveedor,cod_producto,cantidad,precio FROM Productos_Factura_Proveedor WHERE RIFProveedor='$rif' and cod_producto='$codP' ");

        return view('edit.Productos_Factura_Proveedor')->with(['Productos_Factura_Proveedor'=>$Productos_Factura_Proveedor]);
    }

    public function update(Request $request,$rif,$codP)
    {
        $request->validate(['RIFProveedor'=>'required','cod_producto'=>'required','cantidad'=>'required','precio'=>'required']);


        $rif= $request->input('RIFProveedor');
        $codP= $request->input('cod_producto');
        $cant= $request->input('cantidad');
        $price= $request->input('precio');

        DB::update("UPDATE Productos_Factura_Proveedor SET RIFProveedor='$rif',cod_producto='$codP',cantidad='$cant',precio='$price' WHERE RIFProveedor='$rif',cod_producto='$codP' ");

        return redirect('/alimento');
    }

    public function destroy($rif,$codP)
    {
        DB::delete("DELETE FROM Productos_Factura_Proveedor WHERE RIFProveedor='$rif',cod_producto='$codP' ");
        return back()->with('info','El producto fue borrado del sistema');
    }
}
