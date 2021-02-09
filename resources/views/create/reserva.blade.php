@extends('layouts.app2')

@section ('content')

    <form action="{{route('reserva.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Reserva

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    ID

                    <input type="text"   name="num_reserva" class="form-control" >

                </div>

                <div class="form-group" >
                    Fecha Reservación

                    <input type="date"   name="fecha_reservacion" class="form-control" >

                </div>

                <div class="form-group" >
                    Monto Abonado

                    <input type="text"    name="monto_abonado" class="form-control">

                </div>

                <div class="form-group" >
                    Fecha Actual

                    <input type="date"  name="fecha_act" class="form-control">

                </div>

                <div class="form-group" >
                    ID Servicio

                    <input type="text"    name="cod_servicio" class="form-control">

                </div>





                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection