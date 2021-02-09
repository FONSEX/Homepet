<?php

namespace App\Http\Controllers;

use App\animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{

    public function  __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $animal=animal::All();

        return view('products.franquicia')->with(['animal'=>$animal ]) ;

    }


    public function create()
    {

        return view('create.animal');

    }


    public function store(Request $request)
    {

        $request->validate([


            'cod_animal'=>'required',
            'nombrea'=>'required',
            'descripciona' =>'required',


        ]);

        $id= $request->input('cod_animal');
        $name= $request->input('nombrea');
        $description= $request->input( 'descripciona');

        DB::insert("INSERT into animal (cod_animal,nombrea,descripciona) VALUES ('$id','$name','$description')"  );

        return redirect('/franquicia');


    }


    public function show(animal $animal)
    {

    }


    public function edit($id)
    {

        $animal=DB::select("SELECT cod_animal,nombrea,descripciona FROM animal WHERE cod_animal='$id'" );
        return view('edit.animal')->with(['animal'=>$animal]);

    }


    public function update(Request $request, $id)
    {

        $request->validate([



            'nombrea'=>'required',
            'descripciona' =>'required',


        ]);


        $name= $request->input('nombrea');
        $description= $request->input( 'descripciona');


        DB::UPDATE("UPDATE animal set  nombrea='$name'  ,descripciona='$description' where cod_animal='$id' " );


        return redirect('/franquicia');




    }


    public function destroy($id)
    {

        DB::delete("DELETE FROM animal WHERE cod_animal='$id' ");
        return back()->with('info','El encargado fue borrado del sistema');

    }
}
