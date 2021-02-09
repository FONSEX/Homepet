@extends('layouts.app2')

@section ('content')

    <form action="{{route('ModalidadCheque.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Modalidad Cheque

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    ID Modalidad                        


                  
                    <input type="text"   name="cod_modalidad" class="form-control" >

                </div>

                <div class="form-group" >
                    Fecha Pago

                    <input type="text"   name="fecha_pago" class="form-control" >

                </div>

                <div class="form-group" >
                    Monto

                    <input type="text"    name="monto" class="form-control">

                </div>

                <div class="form-group" >
                    Nombre Banco

                    <input type="text"  name="nombre_banco" class="form-control">

                </div>

                <div class="form-group" >
                    Numero Cheque

                    <input type="text"    name="num_cheque" class="form-control">

                </div>





                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection