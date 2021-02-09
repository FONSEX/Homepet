@extends('layouts.app2')

@section ('content')

    <form action="{{route('FacturaProveedor.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: FacturaProveedor

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    Numero Factura                          


                  
                    <input type="text"   name="n_fact" class="form-control" >

                </div>

                <div class="form-group" >
                    Fecha Factura

                    <input type="text"   name="fecha_factP" class="form-control" >

                </div>

                <div class="form-group" >
                    Monto Total

                    <input type="text"    name="montoTotalP" class="form-control">

                </div>

                <div class="form-group" >
                    RIF

                    <input type="text"  name="RIF" class="form-control">

                </div>




                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection