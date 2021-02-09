<?php

namespace App\Http\Controllers;

use App\veterinario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VeterinarioController extends Controller
{

    public function  __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $veterinario=veterinario::All();

        return view('products.mascotas')->with(['veterinario'=>$veterinario ]) ;
    }


    public function create()
    {

        return view('create.veterinario');

    }


    public function store(Request $request)
    {

        $request->validate([

            'cod_vet'=>'required',
            'nombrev' => 'required',
            'telefonov' => 'required',



        ]);

        $id= $request->input('cod_vet');
        $name= $request->input('nombrev');
        $phone= $request->input( 'telefonov');

        DB::insert("INSERT into veterinario (cod_vet,nombrev,telefonov) VALUES ('$id','$name','$phone')"  );

        return redirect('/mascotas');






    }


    public function show(veterinario $veterinario)
    {
        //
    }


    public function edit($id)
    {
        $veterinario=DB::select("SELECT cod_vet,nombrev,telefonov FROM veterinario WHERE cod_vet='$id'" );


        return view('edit.veterinario')->with(['veterinario'=>$veterinario]);
    }


    public function update(Request $request, $id)
    {

        $request->validate([

            'nombrev' => 'required',
            'telefonov' => 'required',

        ]);


        $name= $request->input('nombrev');
        $phone= $request->input( 'telefonov');

        DB::UPDATE("UPDATE veterinario set  nombrev='$name'  ,telefonov='$phone' where cod_vet='$id' " );


        return redirect('/mascotas');




    }


    public function destroy($id)
    {
        DB::delete("DELETE FROM veterinario WHERE cod_vet='$id' ");
        return back();
    }
}
