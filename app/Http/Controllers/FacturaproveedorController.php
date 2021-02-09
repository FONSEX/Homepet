<?php

namespace App\Http\Controllers;

use App\facturaproveedor;
use Illuminate\Http\Request;

class FacturaproveedorController extends Controller
{


    public function  __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\facturaproveedor  $facturaproveedor
     * @return \Illuminate\Http\Response
     */
    public function show(facturaproveedor $facturaproveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\facturaproveedor  $facturaproveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(facturaproveedor $facturaproveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\facturaproveedor  $facturaproveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, facturaproveedor $facturaproveedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\facturaproveedor  $facturaproveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(facturaproveedor $facturaproveedor)
    {
        //
    }
}
