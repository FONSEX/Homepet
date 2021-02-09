@extends('layouts.app2')

@section ('content')

    <form action="{{route('actividad.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Actividad

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    Numero Actividad
                    <input type="text"   name="Num_act" class="form-control" >

                </div>

                <div class="form-group" >
                    Codigo Servicio

                    <input type="text"   name="cod_servicio" class="form-control" >

                </div>

                <div class="form-group" >
                    Descripción

                    <input type="text"    name="Descripcionact" class="form-control">

                </div>

                <div class="form-group" >
                    Capacidad de Atención

                    <input type="text"  name="Capacidad_Atencion" class="form-control">

                </div>

                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection