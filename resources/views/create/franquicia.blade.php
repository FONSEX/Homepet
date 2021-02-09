@extends('layouts.app2')

@section ('content')

    <?php

use App\animal;
use App\encargado;

$animal=animal::All();
$encargado=encargado::All();

    ?>





    <form action="{{route('franquicia.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nueva: Franquicia

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    RIF

                    <input type="text"   name="rif" class="form-control" >

                </div>

                <div class="form-group" >
                    Ciudad

                    <input type="text"   name="ciudad" class="form-control" >

                </div>

                <div class="form-group" >
                    Especializacion

                    <select name="especializacion" class="form-control">


                        @foreach($animal as $variable)
                            <option value="{{$variable->cod_animal}}">{{$variable->nombrea}}</option>
                        @endforeach


                    </select>

                </div>

                <div class="form-group" >
                    Capacidad

                    <input type="text"  name="capacidad" class="form-control">

                </div>

                <div class="form-group" >
                    Encargado

                    <select name="cod_encargado" class="form-control">

                        @foreach($encargado as $variable)
                            <option value="{{$variable->cod_encargado}}">{{$variable->nombree}}</option>
                        @endforeach


                    </select>



                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection