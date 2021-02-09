<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use App\enfermedades_sufridas_mascotas;
use App\relacionesmascota;
use App\telefonosresponsables;

use App\vacunaporraza;
use App\vacunas_aplicadas_mascotas;
use App\vacuna;

use App\mascota;
use App\responsable;
use App\veterinario;
use App\raza;
use Illuminate\Http\Request;


class MascotaController extends Controller
{






    public function index()
    {

        $mascotas=mascota::All();
        $responsable=responsable::All();
        $veterinario=veterinario::All();
        $raza=raza::All();

        $enfermedades_sufridas_mascotas=enfermedades_sufridas_mascotas::All();
        $relacionesmascota=relacionesmascota::All();
        $telefonosresponsables=telefonosresponsables::All();
        $vacunaporraza=vacunaporraza::All();
        $vacunas_aplicadas_mascotas=vacunas_aplicadas_mascotas::All();
        $vacuna=vacuna::All();

        return view('products.mascotas')->with( ['mascotas'=>$mascotas,'responsable'=>$responsable,'veterinario'=>$veterinario,'raza'=>$raza,'enfermedades_sufridas_mascotas'=>$enfermedades_sufridas_mascotas,'relacionesmascota'=>$relacionesmascota,'telefonosresponsables'=>$telefonosresponsables,'vacunaporraza'=>$vacunaporraza,'vacunas_aplicadas_mascotas'=>$vacunas_aplicadas_mascotas,'vacuna'=>$vacuna]   );
    }


    public function create()
    {
        return view('create.mascotas');
    }


    public function store(Request $request)
    {





        $request->validate([

            'cod_mascota' =>'required',
        'cod_raza'=>'required',
        'nombrem'=>'required',
        'edadm'=>'required',
        'sexom'=>'required',
        'pesom'=>'required',
            'cod_vet'=>'required',
        'cod_responsable'=>'required',
        'fechan'=>'required',


        ]);

        $id= $request->input('cod_mascota');
        $idR= $request->input('cod_raza');
        $name= $request->input('nombrem');
        $age= $request->input('edadm');
        $sex= $request->input( 'sexom');
        $height= $request->input( 'pesom');
        $idV=$request->input( 'cod_vet');
        $idResponsable= $request->input( 'cod_responsable');
        $fechan= $request->input( 'fechan');


        DB::insert("INSERT into mascota (cod_mascota,cod_raza,nombrem, edadm,sexom,pesom,cod_vet,cod_responsable, fechan) VALUES ('$id','$idR','$name','$age','$sex','$height','$idV','$idResponsable','$fechan')"  );

        return redirect('/mascotas');



    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $mascota=DB::select("SELECT cod_mascota,cod_raza,nombrem, edadm,sexom,pesom,cod_vet,cod_responsable, fechan FROM mascota WHERE cod_mascota='$id'" );
        return view('edit.mascotas')->with(['mascotas'=>$mascota]);



    }


    public function update(Request $request,$id)
    {



        $request->validate([


            'cod_raza'=>'required',
            'nombrem'=>'required',
            'edadm'=>'required',
            'sexom'=>'required',
            'pesom'=>'required',
            'cod_vet'=>'required',
            'cod_responsable'=>'required',
            'fechan'=>'required',


        ]);


        $idR= $request->input('cod_raza');
        $name= $request->input('nombrem');
        $age= $request->input('edadm');
        $sex= $request->input( 'sexom');
        $height= $request->input( 'pesom');
        $idV=$request->input( 'cod_vet');
        $idResponsable= $request->input( 'cod_responsable');
        $fechan= $request->input( 'fechan');



        DB::UPDATE("UPDATE mascota set  cod_raza='$idR'  ,nombrem='$name' ,edadm='$age',sexom='$sex',pesom='$height',cod_vet='$idV',cod_responsable='$idResponsable',fechan='$fechan' where cod_mascota='$id' " );


        return redirect('/mascotas');





    }


    public function destroy($id)
    {

        DB::delete("DELETE FROM mascota WHERE cod_mascota='$id' ");
        return back()->with('info','El encargado fue borrado del sistema');



    }



    public function  __construct()
    {
        $this->middleware('auth');
    }



}
