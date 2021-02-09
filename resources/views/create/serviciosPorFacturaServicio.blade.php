@extends('layouts.app2')

@section ('content')

    <form action="{{route('serviciosporfacturaServicio.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Servicios por Factura

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    ID Servicio
                    <input type="text"   name="cod_servicio" class="form-control" >

                </div>

                <div class="form-group" >
                    ID Factura

                    <input type="text"   name="cod_fact" class="form-control" >

                </div>

                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection