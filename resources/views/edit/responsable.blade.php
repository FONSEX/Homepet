@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($responsable as $variable) {
        $id=$variable->cod_responsable;
        $name= $variable->nombrer;
        $email=$variable->emailr;

    }

    ?>



    <form action="{{route('responsable.update',$id)}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Responsable

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Nombre

                    <input type="text"  value="{{$name}}"  name="nombrer" class="form-control">

                </div>

                <div class="form-group" >
                    Email

                    <input type="text" value="{{$email}}"  name="emailr" class="form-control">

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection