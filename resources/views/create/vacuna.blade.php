@extends('layouts.app2')

@section ('content')

    <form action="{{route('vacuna.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Vacuna

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    ID


                    <input type="text"   name="cod_vacuna" class="form-control" >

                </div>

                <div class="form-group" >
                    Monto 

                    <input type="text"   name="montoVacuna" class="form-control" >

                </div>

                <div class="form-group" >
                    Nombre

                    <input type="text"    name="nombreVacuna" class="form-control">

                </div>

                <div class="form-group" >
                    Descripción

                    <input type="text"  name="descripcionVacuna" class="form-control">

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection