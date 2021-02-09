@extends('layouts.app2')

@section ('content')


    <?php
use App\personal;

$personal=personal::All();
    foreach ($servicio as $variable) {
        $id=$variable->cod_servicio;
        $name= $variable->nombres;
        $available=$variable->disponibilidad;
        $description=$variable->descripcions;
        $persona=$variable->cod_personal;


    }

    ?>



    <form action="{{route('servicio.update',$id)}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Servicio

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Nombre


                    <select name="nombres"   class="form-control" >

                        <option value="{{$name}}">
                            Deje esta casilla asi para no modificar el valor
                        </option>
                        <option value="Peluqueria">Peluqueria</option>
                        <option value="Spa">Spa</option>
                        <option value="Pernocta">Pernocta</option>
                        <option value="Veterinario">Veterinario</option>


                    </select>



                </div>

                <div class="form-group" >
                    Disponibilidad

                    <input type="text" value="{{$available}}"  name="disponibilidad" class="form-control">

                </div>

                <div class="form-group" >
                    Descripcion

                    <textarea type="text"   name="descripcions" class="form-control"> {{$description}}</textarea>

                </div>


                <div class="form-group" >
                    Personal Encargado

                    <select name="cod_personal" class="form-control">

                        <option value="{{$persona}}">
                            Deje esta casilla asi para no modificar el valor
                        </option>

                        @foreach($personal as $variable)
                            <option value="{{$variable->cod_personal}}">{{$variable->nombrep}}</option>
                        @endforeach



                    </select>

                </div>





                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection