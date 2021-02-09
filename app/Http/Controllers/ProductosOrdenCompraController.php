<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Productos_Orden_Compra;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProductosOrdenCompraController extends Controller
{

    public function index()
    {
        $Productos_Orden_Compra=Productos_Orden_Compra::All();

        return view('products.Productos_Orden_Compra')->with( ['Productos_Orden_Compra'=>$Productos_Orden_Compra]   );
    }

    public function create()
    {
        return view('create.Productos_Orden_Compra');
    }

    public function store(Request $request)
    {
        $request->validate(['cantidad'=>'required','cod_producto'=>'required','cod_compra'=>'required']);

        $cant= $request->input('cantidad');
        $codP= $request->input('cod_producto');
        $codC= $request->input('cod_compra');

        DB::insert("INSERT INTO Productos_Orden_Compra (cantidad,cod_producto,cod_compra) VALUES ('$cant'.'$codP','$codC')");
        return redirect('/Productos_Orden_Compra');
    }

    public function show($codP,$codC)
    {

    }


    public function edit($id)
    {
        $Productos_Orden_Compra=DB::select("SELECT cantidad,cod_producto,cod_compra FROM Productos_Orden_Compra WHERE cod_producto='$codP',cod_compra='$codC'" );

        return view('edit.Productos_Orden_Compra')->with(['Productos_Orden_Compra'=>$Productos_Orden_Compra]);
    }

    public function update(Request $request,$codP,$codC)
    {
        $request->validate(['cantidad'=>'required','cod_producto'=>'required','cod_compra'=>'required']);

        $cant= $request->input('cantidad');
        $codP= $request->input('cod_producto');
        $codC= $request->input('cod_compra');

        DB::update("UPDATE Productos_Orden_Compra SET cantidad='$cant',cod_producto='$codP',cod_compra='$codC' WHERE cod_producto='$codP',cod_compra='$codC' ");

        return redirect('/Productos_Orden_Compra');
    }

    public function destroy($codP,$codC)
    {
        DB::delete("DELETE FROM Productos_Orden_Compra WHERE cod_producto='$codP',cod_compra='$codC' ");
        return back()->with('info','El producto fue borrado del sistema');
    }
}
