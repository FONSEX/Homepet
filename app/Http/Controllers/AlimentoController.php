<?php





namespace App\Http\Controllers;
use App\alimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ordencompra;
use App\producto;
use App\productos_distribuidos_proveedor;
use App\productos_factura_proveedor;
use App\productos_orden_compra;
use App\proveedor;


class AlimentoController extends Controller
{


    public function  __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $ordencompra=ordencompra::All();
        $producto=producto::All();
        $productos_distribuidos_proveedor=productos_distribuidos_proveedor::All();
        $productos_factura_proveedor=productos_factura_proveedor::All();
        $productos_orden_compra=productos_orden_compra::All();
        $proveedor=proveedor::All();

        $alimento=alimento::All();

        return view('products.inventario')->with(['alimento'=>$alimento, 'ordencompra'=>$ordencompra,'producto'=>$producto,'productos_distribuidos_proveedor'=>$productos_distribuidos_proveedor,'productos_factura_proveedor'=>$productos_factura_proveedor,'productos_orden_compra'=>$productos_orden_compra,'proveedor'=>$proveedor ]) ;

    }

    public function create()
    {

        return view('create.alimento');


    }



    public function store(Request $request)
    {


        $request->validate([


            'cod_alimento'=>'required',
            'nombrealimento'=>'required',
            'descripcionalimento' =>'required',
            'costoalimento' =>'required',

        ]);

        $id= $request->input('cod_alimento');
        $name= $request->input('nombrealimento');
        $description= $request->input( 'descripcionalimento');
        $price= $request->input( 'costoalimento');


        DB::insert("INSERT into alimento (cod_alimento,nombrealimento,descripcionalimento,costoalimento) VALUES ('$id','$name','$description','$price')"  );

        return redirect('/inventario');




    }


    public function show(alimento $alimento)
    {



    }


    public function edit($id)
    {

        $alimento=DB::select("SELECT  cod_alimento,nombrealimento,descripcionalimento,costoalimento FROM alimento WHERE cod_alimento='$id'" );
        return view('edit.alimento')->with(['alimento'=>$alimento]);

    }



    public function update(Request $request, $id)
    {



        $request->validate([


            'nombrealimento'=>'required',
            'descripcionalimento' =>'required',
            'costoalimento' =>'required',

        ]);

        $name= $request->input('nombrealimento');
        $description= $request->input( 'descripcionalimento');
        $price= $request->input( 'costoalimento');


        DB::UPDATE("UPDATE alimento set  nombrealimento='$name'  ,descripcionalimento='$description', costoalimento='$price' where cod_alimento='$id' " );


        return redirect('/inventario');



    }




    public function destroy($id)
    {

        DB::delete("DELETE FROM alimento WHERE cod_alimento='$id' ");
        return back()->with('info','El encargado fue borrado del sistema');


    }
}
