<?php

namespace App\Http\Controllers;

use App\personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{

    public function  __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $personal=personal::All();

        return view('products.personal')->with(['personal'=>$personal ]) ;

    }


    public function create()
    {
        return view('create.personal');
    }


    public function store(Request $request)
    {

        $request->validate([

            'cod_personal'=> 'required',
            'nombrep' => 'required',
            'direccionp' => 'required',
            'telefonop' => 'required',
            'sueldop' => 'required',




        ]);

        $id= $request->input('cod_personal');
        $name= $request->input('nombrep');
        $direction= $request->input('direccionp');
        $phone = $request->input('telefonop');
        $salary= $request->input('sueldop');



        DB::insert("INSERT into personal (cod_personal,nombrep,direccionp,telefonop,sueldop) VALUES ('$id','$name','$direction','$phone','$salary')"  );

        return redirect('/personal');




    }


    public function show(personal $personal)
    {

    }




    public function edit($id)
    {
        $personal=DB::select("SELECT cod_personal,nombrep,direccionp,telefonop,sueldop FROM personal WHERE cod_personal='$id'" );


        return view('edit.personal')->with(['personal'=>$personal]);
    }


    public function update(Request $request, $id)
    {

        $request->validate([


            'nombrep' => 'required',
            'direccionp' => 'required',
            'telefonop' => 'required',
            'sueldop' => 'required',




        ]);


        $name= $request->input('nombrep');
        $direction= $request->input('direccionp');
        $phone = $request->input('telefonop');
        $salary= $request->input('sueldop');



        DB::UPDATE("UPDATE personal set nombrep='$name'  ,direccionp='$direction', telefonop='$phone', sueldop='$salary' Where cod_personal='$id' " );


        return redirect('/personal');


    }



    public function destroy($id)
    {
        DB::delete("DELETE FROM personal WHERE cod_personal='$id' ");
        return back()->with('info','El encargado fue borrado del sistema');
    }
}
