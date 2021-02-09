@extends('layouts.app2')

@section ('content')

    <form action="{{route('ModalidadEfectivo.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Modalidad Efectivo

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    ID Modalidad                          


                  
                    <input type="text"   name="cod_modalidad" class="form-control" >

                </div>

                <div class="form-group" >
                    Fecha de Pago

                    <input type="text"   name="fecha_pagoE" class="form-control" >

                </div>

                <div class="form-group" >
                    Monto

                    <input type="text"    name="montoE" class="form-control">

                </div>



                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection