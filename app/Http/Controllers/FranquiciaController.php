<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\franquicia;
use App\encargado;
use App\animal;
use Illuminate\Http\Request;

class FranquiciaController extends Controller
{


    public function  __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {
        $franquicia=franquicia::All();
        $encargados=encargado::All();
        $animal=animal::All();

        return view('products.franquicia')->with(['franquicia'=>$franquicia ,'encargados'=>$encargados,'animal'=> $animal]) ;
    }





    public function create()
    {
        return view('create.franquicia');
    }




    public function store(Request $request)
    {


        $request->validate([

            'rif'=> 'required',
            'ciudad' => 'required',
            'especializacion' => 'required',
            'capacidad' => 'required',
            'cod_encargado' => 'required',



        ]);

        $id= $request->input('rif');
        $city= $request->input('ciudad');
        $special= $request->input('especializacion');
        $capacity = $request->input('capacidad');
        $idE = $request->input('cod_encargado');


        DB::insert("INSERT into franquicia (rif,ciudad,especializacion,capacidad,cod_encargado) VALUES ('$id','$city','$special','$capacity','$idE')"  );

        return redirect('/franquicia');




    }



    public function show(franquicia $franquicia)
    {

    }




    public function edit($id)
    {

        $franquicia=DB::select("SELECT rif,ciudad,especializacion,capacidad,cod_encargado FROM franquicia WHERE rif='$id'" );


        return view('edit.franquicia')->with(['franquicia'=>$franquicia]);

    }



    public function update(Request $request, $id)
    {

        $request->validate([


            'ciudad' => 'required',
            'especializacion' => 'required',
            'capacidad' => 'required',




        ]);






        $city= $request->input('ciudad');
        $special= $request->input('especializacion');
        $capacity = $request->input('capacidad');






        DB::UPDATE("UPDATE franquicia set  especializacion='$special'  ,ciudad='$city'  ,capacidad='$capacity'   Where rif='$id' " );

        return redirect('/franquicia');




    }





    public function destroy($id)
    {

        DB::delete("DELETE FROM franquicia WHERE rif='$id' ");
        return back()->with('info',' borrado del sistema');


    }
}
