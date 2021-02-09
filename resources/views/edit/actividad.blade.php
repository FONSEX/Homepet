@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($actividad as $variable) {
        $numact=$variable->Num_act;
        $servicecode= $variable->cod_servicio;
        $description=$variable->Descripcionact;
        $capacity=$variable->Capacidad_Atencion;
    }

    ?>



    <form action="{{route('actividad.update',$servicecode)}}"  method="POST">
        @csrf
        @method('POST')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Actividad

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Numero Actividad

                    <input type="text"  value="{{$numact  }}"  name="Num_act" class="form-control">

                </div>

                <div class="form-group" >
                    Codigo Servicio

                    <input type="text" value="{{$servicecode }}"  name="cod_servicio" class="form-control">

                </div>

                <div class="form-group" >
                    Descripción

                    <input type="text" value="{{$description}}"   name="Descripcionact" class="form-control">

                </div>


                <div class="form-group" >
                    Capacidad de Atención

                    <input type="text" value="{{$capacity}}"   name="Capacidad_Atencion" class="form-control">

                </div>

                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection