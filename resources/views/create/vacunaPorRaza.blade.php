@extends('layouts.app2')

@section ('content')

    <form action="{{route('vacunaporraza.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Vacuna Por Raza

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    ID Vacuna

                    <input type="text"   name="cod_vacuna" class="form-control" >

                </div>

                <div class="form-group" >
                    ID Raza

                    <input type="text"   name="cod_raza" class="form-control" >

                </div>

                <div class="form-group" >
                    Edad Minima

                    <input type="text"    name="edadMin" class="form-control">

                </div>

                <div class="form-group" >
                    Edad Maxima

                    <input type="text"  name="edadMax" class="form-control">

                </div>

                <div class="form-group" >
                    Dosis

                    <input type="text"    name="dosis" class="form-control">

                </div>





                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection