@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($Productos_Factura_Tienda as $variable) { 
        $productid=$variable->cod_producto;       
                                           
        $factid= $variable->numFact;          
        $quantity=$variable->cantidad;    
        $price=$variable->precio;
        $discount=$variable->descuento;


    }

    ?>



    <form action="{{route('Productos_Factura_Tienda.update',$id    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Productos Factura-Tienda

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                  ID Producto
                    <input type="text"  value="{{$productid         }}"  name="cod_producto" class="form-control">

                </div>

                <div class="form-group" >
                    Numero Factura               

                    <input type="text" value="{{$factid           }}"  name="numFact" class="form-control">

                </div>

                <div class="form-group" >
                    Cantidad

                    <input type="text" value="{{$quantity}}"   name="cantidad" class="form-control">

                </div>


                <div class="form-group" >
                    Precio

                    <input type="text" value="{{$price}}"   name="precio" class="form-control">

                </div>

                <div class="form-group" >
                    Descuento

                    <input type="text" value="{{$discount}}"   name="descuento" class="form-control">

                </div>




                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection