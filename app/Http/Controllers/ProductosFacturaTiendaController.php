<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Productos_Factura_Tienda;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProductosFacturaTiendaController extends Controller
{

    public function index()
    {
        $Productos_Factura_Tienda=Productos_Factura_Tienda::All();

        return view('products.Productos_Factura_Tienda')->with( ['Productos_Factura_Tienda'=>$Productos_Factura_Tienda]   );
    }

    public function create()
    {
        return view('create.Productos_Factura_Tienda');
    }

    public function store(Request $request)
    {
        $request->validate(['cod_producto'=>'required','numFact'=>'required','cantidad'=>'required','precio'=>'required','descuento'=>'required']);

        $codP= $request->input('cod_producto');
        $numF= $request->input('numFact');
        $cant= $request->input('cantidad');
        $price= $request->input('precio');
        $desc= $request->input('descuento');

        DB::insert("INSERT INTO Productos_Factura_Tienda (cod_producto,numFact,cantidad,precio,descuento) VALUES ('$codP','$numF','$cant','$price','$desc')");

        return redirect('/Productos_Factura_Tienda');
    }

    public function show($codP,$numF)
    {

    }


    public function edit($codP,$numF)
    {
        $Productos_Factura_Tienda=DB::select("SELECT cod_producto,numFact,cantidad,precio,descuento FROM Productos_Factura_Tienda WHERE cod_producto='$codP',numFact='$numF' ");

        return view('edit.Productos_Factura_Tienda')->with(['Productos_Factura_Tienda'=>$Productos_Factura_Tienda]);
    }

    public function update(Request $request,$codP,$numF)
    {
        $request->validate(['cod_producto'=>'required','numFact'=>'required','cantidad'=>'required','precio'=>'required','descuento'=>'required']);

        $codP= $request->input('cod_producto');
        $numF= $request->input('numFact');
        $cant= $request->input('cantidad');
        $price= $request->input('precio');
        $desc= $request->input('descuento');

        DB::update("UPDATE Productos_Factura_Tienda SET cod_producto='$codP',numFact='$numF',cantidad='$cant',precio='$price',descuento='$desc' WHERE cod_producto='$codP',numFact='$numF' ");

        return redirect('/Productos_Factura_Tienda');
    }

    public function destroy($codP,$numF)
    {
        DB::delete("DELETE FROM Productos_Factura_Tienda WHERE cod_producto='$codP',numFact='$numF' ");
        return back()->with('info','El producto fue borrado del sistema');
    }
}
