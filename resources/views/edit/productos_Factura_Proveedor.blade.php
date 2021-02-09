@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($Productos_Factura_Proveedor as $variable) {  //<------ aqui donde dice nombre tabla coloca el nombre de la tabla
        $rifP=$variable->RIFProveedor;         //<----- aqui coloca todas las variables que estan en esa tabla y
                                             //       bueno colocale un nombre a la variable de tu preferencia y si se
        $productid= $variable->cod_producto;           //       acaban las variables crea otras dentro de ese foreach y si sobran borra las q sobraron ps
        $quantity=$variable->cantidad;    // y lo que dice $variable dejalo asi ps
        $price=$variable->precio;


    }

    ?>



    <form action="{{route('Productos_Factura_Proveedor.update',$id  //AQUI VAS A COLOCAR EL pk o id de la tabla    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Productos Factura-Proveedor <---------- BUENO YA DICE EXPLICITO QUE DEBES HACER XD

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    RIF Proveedor                      <---------- aqui colocas el valor que corresponde ejemplo si la tabla tiene solo la variable nombre y direccion tu aqui deberias colocar nombre y en el siguiente articulo colocas direccion

                    <input type="text"  value="{{$rifP         }}"  name="RIFProveedor" class="form-control">

                </div>

                <div class="form-group" >
                    ID Producto                <------ lo que te explique arriba jeje

                    <input type="text" value="{{$productoid           }}"  name="cod_producto" class="form-control">

                </div>

                <div class="form-group" >
                    Cantidad

                    <input type="text" value="{{$quantity}}"   name="cantidad" class="form-control">

                </div>


                <div class="form-group" >
                    Precio

                    <input type="text" value="{{$price}}"   name="precio" class="form-control">

                </div>




                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection