@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($Productos_Distribuidos_Proveedor as $variable) { 
        $rifP=$variable->RIFProveedor;       
                                           
        $productid= $variable->cod_producto;          

    }

    ?>



    <form action="{{route('Productos_Distribuidos_Proveedor.update',$id    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Productos Distribuidos por Proveedor

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                  RIF Proveedor
                    <input type="text"  value="{{$rifP         }}"  name="RIFProveedor" class="form-control">

                </div>

                <div class="form-group" >
                    ID Producto               

                    <input type="text" value="{{$productid           }}"  name="cod_producto" class="form-control">

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection