<?php

namespace App\Http\Controllers;

use App\responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResponsableController extends Controller
{

    public function  __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $responsable=responsable::All();

        return view('products.mascotas')->with(['responsable'=>$responsable ]) ;
    }



    public function create()
    {
        return view('create.responsable');
    }



    public function store(Request $request)
    {

        $request->validate([



            'cod_responsable'=>'required',
            'nombrer' => 'required',
            'emailr' => 'required',



        ]);


        $id= $request->input('cod_responsable');
        $name= $request->input('nombrer');
        $email= $request->input( 'emailr');

        DB::insert("INSERT into responsable (cod_responsable,nombrer,emailr) VALUES ('$id','$name','$email')"  );

        return redirect('/mascotas');




    }


    public function show(responsable $responsable)
    {

    }



    public function edit($id)
    {

        $responsable=DB::select("SELECT cod_responsable,nombrer,emailr FROM responsable WHERE cod_responsable='$id'" );


        return view('edit.responsable')->with(['responsable'=>$responsable]);

    }


    public function update(Request $request, $id)
    {

        $request->validate([

            'nombrer' => 'required',
            'emailr' => 'required',

        ]);


        $name= $request->input('nombrer');
        $email= $request->input( 'emailr');

        DB::UPDATE("UPDATE responsable set  nombrer='$name'  ,emailr='$email' where cod_responsable='$id' " );


        return redirect('/mascotas');


    }


    public function destroy($id)
    {
        DB::delete("DELETE FROM responsable WHERE cod_responsable='$id' ");
        return back()->with('info','El encargado fue borrado del sistema');
    }
}
