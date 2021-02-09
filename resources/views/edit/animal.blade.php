@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($animal as $variable) {
        $id=$variable->cod_animal;
        $name= $variable->nombrea;
        $description=$variable->descripciona;

    }

    ?>



    <form action="{{route('animal.update',$id)}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Animal Especializacion de la Franquicia

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Nombre

                    <input type="text"  value="{{$name}}"  name="nombrea" class="form-control">

                </div>

                <div class="form-group" >
                    Descripcion

                    <input type="text" value="{{$description}}"  name="descripciona" class="form-control">

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection