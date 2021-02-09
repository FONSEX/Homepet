@extends('layouts.app2')

@section ('content')


    <?php

    use App\animal;
    use App\encargado;

    $animal=animal::All();
    $encargado=encargado::All();




    foreach ($franquicia as $variable) {
        $id=$variable->rif;
        $city= $variable->ciudad;
        $special=$variable->especializacion;
        $capacity=$variable->capacidad;

    }

    ?>



    <form action="{{route('franquicia.update',$id)}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Franquicia

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Ciudad

                    <input type="text"  value="{{$city}}"  name="ciudad" class="form-control">

                </div>

                <div class="form-group" >
                    Especializacion

                    <select name="especializacion"  class="form-control">

                        <option value="{{$special}}">
                            Deje esta casilla asi para no modificar el valor
                        </option>
                        @foreach($animal as $variable)
                            <option value="{{$variable->cod_animal}}">{{$variable->nombrea}}</option>
                        @endforeach


                    </select>

                </div>

                <div class="form-group" >
                    Capacidad

                    <input type="text" value="{{$capacity}}"   name="capacidad" class="form-control">

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection