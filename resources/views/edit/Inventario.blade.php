@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($Inventario as $variable) { 
        $ajustid=$variable->cod_ajuste;       
                                           
        $ajustdate= $variable->fecha_ajuste;          
        $productid=$variable->cod_producto;    
        $quantity=$variable->cantidadInv;
        $ajusttype=$variable->tipoAjuste;


    }

    ?>



    <form action="{{route('Inventario.update',$id    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Inventario

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                  ID Ajuste
                    <input type="text"  value="{{$ajustid         }}"  name="cod_ajuste" class="form-control">

                </div>

                <div class="form-group" >
                    Fecha de Ajuste               

                    <input type="text" value="{{$ajustdate           }}"  name="fecha_ajuste" class="form-control">

                </div>

                <div class="form-group" >
                    ID Producto

                    <input type="text" value="{{$productid}}"   name="cod_producto" class="form-control">

                </div>


                <div class="form-group" >
                    Cantidad en Inventario

                    <input type="text" value="{{$quantity}}"   name="cantidadInv" class="form-control">

                </div>

                <div class="form-group" >
                    Tipo de Ajuste

                    <input type="text" value="{{$ajusttype}}"   name="tipoAjuste" class="form-control">

                </div>





                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection