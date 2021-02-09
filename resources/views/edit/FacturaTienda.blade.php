@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($FacturaTienda as $variable) { 
        $id=$variable->numFact;       
                                           
        $date= $variable->fecha;          
        $resid=$variable->cod_responsable;    
        $modeid=$variable->cod_modalidad;


    }

    ?>



    <form action="{{route('FacturaTienda.update',$id    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Factura Tienda

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                  Numero Factura
                    <input type="text"  value="{{$id         }}"  name="numFact" class="form-control">

                </div>

                <div class="form-group" >
                    Fecha               

                    <input type="text" value="{{$date           }}"  name="fecha" class="form-control">

                </div>

                <div class="form-group" >
                    ID Responsable

                    <input type="text" value="{{$resid}}"   name="cod_responsable" class="form-control">

                </div>


                <div class="form-group" >
                    ID Modalidad

                    <input type="text" value="{{$modeid}}"   name="cod_modalidad" class="form-control">

                </div>




                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection