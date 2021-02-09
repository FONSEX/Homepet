@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($Producto as $variable) {
        $id=$variable->cod_producto;

        $description= $variable->descripcionp;
        $cost=$variable->costop;
        $name=$variable->nombrep;

    }

    ?>



    <form action="{{route('producto.update',$id )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Producto

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    ID

                    <input type="text"  value="{{$id  }}"  name="cod_producto" class="form-control">

                </div>

                <div class="form-group" >
                    Descripción

                    <input type="text" value="{{$description }}"  name="descripcionP" class="form-control">

                </div>

                <div class="form-group" >
                    Costo

                    <input type="text" value="{{$cost}}"   name="costoP" class="form-control">

                </div>


                <div class="form-group" >
                    Nombre

                    <input type="text" value="{{$name}}"   name="nombreP" class="form-control">

                </div>




                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection