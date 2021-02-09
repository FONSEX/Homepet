@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($Productos_Orden_Compra as $variable) { 
        $quantity=$variable->cantidad;       
                                           
        $productid= $variable->cod_producto;          
        $orderid=$variable->cod_compra;    

    }

    ?>



    <form action="{{route('Productos_Orden_Compra.update',$id    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Productos Orden-Compra

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                  Cantidad
                    <input type="text"  value="{{$quantity         }}"  name="cantidad" class="form-control">

                </div>

                <div class="form-group" >
                    ID Producto               

                    <input type="text" value="{{$productid           }}"  name="cod_producto" class="form-control">

                </div>

                <div class="form-group" >
                    ID Compra

                    <input type="text" value="{{$orderid}}"   name="cod_compra" class="form-control">

                </div>



                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection