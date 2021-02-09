@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($encargado as $variable) {
        $id=$variable->cod_encargado;
        $name= $variable->nombree;
        $direction=$variable->direccione;
        $phone=$variable->telefonoe;
        $salary=$variable->sueldoe;
        $time=$variable->tiempo_encargado;
    }

    ?>



    <form action="{{route('encargado.update',$variable->cod_encargado)}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Encargado

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Nombre

                    <input type="text"  value="{{$name}}"  name="nombree" class="form-control" >

                </div>

                <div class="form-group" >
                    Direccion

                    <input type="text"  value="{{$direction}}"  name="direccione" class="form-control">

                </div>

                <div class="form-group" >
                    Telefono

                    <input type="text" value="{{$phone}}"  name="telefonoe" class="form-control">

                </div>

                <div class="form-group" >
                    Sueldo

                    <input type="text" value="{{$salary}}"   name="sueldoe" class="form-control">

                </div>

                <div class="form-group" >
                    Tiempo Encargado

                    <input type="date" value="{{$time}}"   name="tiempo_encargado" class="form-control">

                </div>





                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection














