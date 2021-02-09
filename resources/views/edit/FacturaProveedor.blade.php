@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($FacturaProveedor as $variable) { 
        $factid=$variable->n_fact;       
                                           
        $factdate= $variable->fecha_factP;          
        $amount=$variable->montoTotalP;    
        $rif=$variable->RIF;


    }

    ?>



    <form action="{{route('FacturaProveedor.update',$id    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: FacturaProveedor
            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                  Numero Factura
                    <input type="text"  value="{{$factid         }}"  name="n_fact" class="form-control">

                </div>

                <div class="form-group" >
                    Fecha Factura               

                    <input type="text" value="{{$factdate           }}"  name="fecha_factP" class="form-control">

                </div>

                <div class="form-group" >
                    Monto Total

                    <input type="text" value="{{$amount}}"   name="montoTotalP" class="form-control">

                </div>


                <div class="form-group" >
                    RIF

                    <input type="text" value="{{$rif}}"   name="RIF" class="form-control">

                </div>




                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection