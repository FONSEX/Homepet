<?php

namespace App\Http\Controllers;

use App\raza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RazaController extends Controller
{


    public function  __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {

        $raza=alimento::All();

        return view('products.mascotas')->with(['raza'=>$raza ]) ;

    }


    public function create()
    {

        return view('create.raza');

    }


    public function store(Request $request)
    {


        $request->validate([


            'cod_raza' =>'required',
        'cod_animal' =>'required',
         'nombrer' =>'required',
         'descripcionr' =>'required',
        'paisorigen' =>'required',
         'nivel_inteligencia' =>'required',
         'contextura_fuerte' =>'required',
         'altura_min' =>'required',
         'altura_max' =>'required',
         'porcion_diaria' =>'required',
         'talla' =>'required',
        'color_pelaje' =>'required',
        'cod_alimento' =>'required',

        ]);

        $id= $request->input('cod_raza');
        $idA= $request->input('cod_animal');
        $name= $request->input('nombrer');
        $description= $request->input( 'descripcionr' );
        $country= $request->input( 'paisorigen');
        $inteligency= $request->input('nivel_inteligencia');
        $contexture= $request->input( 'contextura_fuerte');
        $heightMin= $request->input('altura_min');
        $heightMax= $request->input('altura_max');
        $DiaryPortion= $request->input('porcion_diaria');
        $size= $request->input('talla' );
        $color= $request->input('color_pelaje');
        $idAlim= $request->input('cod_alimento');


        DB::insert("INSERT into raza (cod_raza,cod_animal, nombrer, descripcionr,paisorigen , nivel_inteligencia ,contextura_fuerte ,altura_min , altura_max ,porcion_diaria ,talla,color_pelaje ,cod_alimento) VALUES ('$id','$idA','$name','$description','$country','$inteligency','$contexture','$heightMin ','$heightMax ','$DiaryPortion','$size', '$color' ,'$idAlim' )"  );

        return redirect('/mascotas');





    }


    public function show(raza $raza)
    {

    }


    public function edit($id)
    {


        $raza=DB::select("SELECT cod_raza,cod_animal, nombrer, descripcionr,paisorigen , nivel_inteligencia ,contextura_fuerte ,altura_min , altura_max ,porcion_diaria ,talla,color_pelaje ,cod_alimento FROM raza WHERE cod_raza='$id'" );


        return view('edit.raza')->with(['raza'=>$raza]);



    }



    public function update(Request $request, $id)
    {


        $request->validate([


            'cod_raza' =>'required',
            'cod_animal' =>'required',
            'nombrer' =>'required',
            'descripcionr' =>'required',
            'paisorigen' =>'required',
            'nivel_inteligencia' =>'required',
            'contextura_fuerte' =>'required',
            'altura_min' =>'required',
            'altura_max' =>'required',
            'porcion_diaria' =>'required',
            'talla' =>'required',
            'color_pelaje' =>'required',
            'cod_alimento' =>'required',

        ]);

        $id= $request->input('cod_raza');
        $idA= $request->input('cod_animal');
        $name= $request->input('nombrer');
        $description= $request->input( 'descripcionr' );
        $country= $request->input( 'paisorigen');
        $inteligency= $request->input('nivel_inteligencia');
        $contexture= $request->input( 'contextura_fuerte');
        $heightMin= $request->input('altura_min');
        $heightMax= $request->input('altura_max');
        $DiaryPortion= $request->input('porcion_diaria');
        $size= $request->input('talla' );
        $color= $request->input('color_pelaje');
        $idAlim= $request->input('cod_alimento');

        DB::UPDATE("UPDATE raza set cod_raza='$id',cod_animal='$idA', nombrer='$name', descripcionr='$description',paisorigen='$country' , nivel_inteligencia='$inteligency' ,contextura_fuerte='$contexture' ,altura_min='$heightMin' , altura_max='$heightMax' ,porcion_diaria='$DiaryPortion' ,talla='$size',color_pelaje='$color' ,cod_alimento ='$idAlim'          where cod_raza='$id' " );


        return redirect('/mascotas');


    }


    public function destroy($id)
    {

        DB::delete("DELETE FROM raza WHERE cod_raza='$id' ");
        return back();

    }
}
