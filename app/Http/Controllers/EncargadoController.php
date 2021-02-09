<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\encargado;
use Illuminate\Http\Request;

class EncargadoController extends Controller
{

    public function  __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {

        $encargados=encargado::All();

        return view('products.franquicia')->with(['encargados'=>$encargados]) ;

    }





    public function create()
    {

        return view('create.encargado');
    }

    public static function edit($id)
    {

        $encargado=DB::select("SELECT cod_encargado,nombree,direccione,telefonoe,sueldoe,tiempo_encargado FROM encargado WHERE cod_encargado='$id'" );


        return view('edit.encargado')->with(['encargado'=>$encargado]);

    }

    public static function destroy($id)
    {

        DB::delete("DELETE FROM encargado WHERE cod_encargado='$id' ");
        return back()->with('info','El encargado fue borrado del sistema');

    }



    public function store(Request $request)
    {

            $request->validate([

                'cod_encargado' => 'required',
                'nombree' => 'required',
                'direccione' => 'required',
                'telefonoe' => 'required',
                'sueldoe' => 'required',
                'tiempo_encargado' => 'required',


            ]);

            $id= $request->input('cod_encargado');
            $name= $request->input('nombree');
            $direction= $request->input('direccione');
            $phone = $request->input('telefonoe');
            $salary = $request->input('sueldoe');
            $time = $request->input('tiempo_encargado');

            DB::insert("INSERT into encargado (cod_encargado,nombree,direccione,telefonoe,sueldoe,tiempo_encargado) VALUES ('$id','$name','$direction','$phone','$salary','$time')"  );

        return redirect('/franquicia');


    }



    public  function show($id)
    {


    }




    public  function update(Request $request,$id)
    {

        $request->validate([


            'nombree' => 'required',
            'direccione' => 'required',
            'telefonoe' => 'required',
            'sueldoe' => 'required',
            'tiempo_encargado' => 'required',


        ]);

        $name = $request->input('nombree');
        $direction =  $request->input('direccione');
        $phone = $request->input('telefonoe');
        $salary = $request->input('sueldoe');
        $time = $request->input('tiempo_encargado');



        DB::UPDATE("UPDATE encargado set nombree= '$name' ,direccione='$direction'  ,telefonoe='$phone'  ,sueldoe='$salary'  ,tiempo_encargado='$time'  Where cod_encargado='$id' " );

        return redirect('/franquicia');
    }









}
