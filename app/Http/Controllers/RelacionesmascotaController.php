<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\RelacionesMascota;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class RelacionesMascotaController extends Controller
{

    public function index()
    {
        $RelacionesMascota=RelacionesMascota::All();

        return view('products.RelacionesMascota')->with( ['RelacionesMascota'=>$RelacionesMascota]   );
    }

    public function create()
    {
        return view('create.RelacionesMascota');
    }

    public function store(Request $request)
    {
        $request->validate(['parentesco'=>'required','cod_mascota'=>'required','cod_mascotaRelacion'=>'required']);

        $p= $request->input('parentesco');
        $codM= $request->input('cod_mascota');
        $codMR= $request->input('cod_mascotaRelacion');

        DB::insert("INSERT INTO RelacionesMascota (parentesco,cod_mascota,cod_mascotaRelacion) VALUES ('$p','$codM','$codMR')");

        return redirect('/mascotas');
    }

    public function show($codM,$codMR)
    {

    }

    public function edit($codM,$codMR)
    {
        $RelacionesMascota=DB::select("SELECT parentesco,cod_mascota,cod_mascotaRelacion FROM RelacionesMascota WHERE cod_mascota='$codM' and cod_mascotaRelacion='$codMR' ");

        return view('edit.RelacionesMascota')->with(['RelacionesMascota'=>$RelacionesMascota]);
    }

    public function update(Request $request,$codM,$codMR)
    {
        $request->validate(['parentesco'=>'required','cod_mascota'=>'required','cod_mascotaRelacion'=>'required']);

        $p= $request->input('parentesco');
        $codM= $request->input('cod_mascota');
        $codMR= $request->input('cod_mascotaRelacion');

        DB::update("UPDATE RelacionesMascota SET parentesco='$p',cod_mascota='$codM',cod_mascotaRelacion='$codMR' WHERE cod_mascota='$codM' and cod_mascotaRelacion='$codMR' ");

        return redirect('/mascotas');
    }

    public function destroy($codM,$codMR)
    {
        DB::delete("DELETE FROM RelacionesMascota WHERE cod_mascota='$codM' and cod_mascotaRelacion='$codMR' ");
        return back()->with('info','La relacion fue eliminada del sistema');
    }
}
