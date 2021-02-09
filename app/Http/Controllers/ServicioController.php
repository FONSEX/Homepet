<?php

namespace App\Http\Controllers;

use App\servicio;
use App\actividad;
use App\ordendeuso;
use App\inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{


    public function  __construct()
    {
        $this->middleware('auth');
    }





    public function index()
    {

        $servicio=servicio::All();
        $actividad=actividad::All();
        $ordendeuso=ordendeuso::All();
        $inventario=inventario::All();
        return view('products.servicio')->with(['servicio'=>$servicio ,'actividad'=>$actividad,'ordendeuso'=>$ordendeuso,'inventario'=>$inventario]) ;

    }



    public function create()
    {
        return view('create.servicio');
    }



    public function store(Request $request)
    {

        $request->validate([

            'cod_servicio'=> 'required',
            'nombres' => 'required',
            'disponibilidad' => 'required',
            'descripcions' => 'required',
            'cod_personal' => 'required',


        ]);


        $id= $request->input('cod_servicio');
        $name= $request->input('nombres');
        $available= $request->input( 'disponibilidad');
        $description = $request->input('descripcions');

        $personal = $request->input('cod_personal');

        DB::insert("INSERT into servicio (cod_servicio,nombres,disponibilidad,descripcions,cod_personal) VALUES ('$id','$name','$available','$description','$personal')"  );

        return redirect('/servicio');





    }




    public function show(servicio $servicio)
    {

    }



    public function edit($id)
    {

        $servicio=DB::select("SELECT cod_servicio,nombres,disponibilidad,descripcions,cod_personal FROM servicio WHERE cod_servicio='$id'" );


        return view('edit.servicio')->with(['servicio'=>$servicio]);



    }




    public function update(Request $request, $id)
    {

        $request->validate([


            'nombres' => 'required',
            'disponibilidad' => 'required',
            'descripcions' => 'required',
            'cod_personal'=> 'required',


        ]);


        $name= $request->input('nombres');
        $available= $request->input( 'disponibilidad');
        $description = $request->input('descripcions');
        $personal = $request->input('cod_personal');


        DB::UPDATE("UPDATE servicio set nombres='$name'  ,disponibilidad='$available', descripcions='$description', cod_personal='$personal'   Where cod_servicio='$id' " );


        return redirect('/servicio');




    }


    public function destroy($id)
    {

        DB::delete("DELETE FROM servicio WHERE cod_servicio='$id' ");
        return back()->with('info','El encargado fue borrado del sistema');

    }
}
