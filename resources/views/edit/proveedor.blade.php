@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($Proveedor as $variable) {  //<------ aqui donde dice nombre tabla coloca el nombre de la tabla
        $rifP=$variable->RIFProveedor;         //<----- aqui coloca todas las variables que estan en esa tabla y
                                             //       bueno colocale un nombre a la variable de tu preferencia y si se
        $name= $variable->nombreProv;           //       acaban las variables crea otras dentro de ese foreach y si sobran borra las q sobraron ps
        $direction=$variable->direccionProv;    // y lo que dice $variable dejalo asi ps
        $localphone=$variable->telefonoLocalProv;
        $cellphone=$variable->telefonoCelularProv;
        $contact=$variable->personaContacto;


    }

    ?>



    <form action="{{route('Proveedor.update',$id  //AQUI VAS A COLOCAR EL pk o id de la tabla    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Proveedor <---------- BUENO YA DICE EXPLICITO QUE DEBES HACER XD

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    RIF                      <---------- aqui colocas el valor que corresponde ejemplo si la tabla tiene solo la variable nombre y direccion tu aqui deberias colocar nombre y en el siguiente articulo colocas direccion

                    <input type="text"  value="{{$rifP         }}"  name="RIFProveedor" class="form-control">

                </div>

                <div class="form-group" >
                    Nombre                <------ lo que te explique arriba jeje

                    <input type="text" value="{{$name           }}"  name="nombreProv" class="form-control">

                </div>

                <div class="form-group" >
                    Dirección

                    <input type="text" value="{{$direccionProv}}"   name="direccionProv" class="form-control">

                </div>


                <div class="form-group" >
                    Telefono Local

                    <input type="text" value="{{$localphone}}"   name="telefonoLocalProv" class="form-control">

                </div>

                <div class="form-group" >
                    Telefono Celular

                    <input type="text" value="{{$cellphone}}"   name="telefonoCelularProv" class="form-control">

                </div>

                <div class="form-group" >
                    Persona de Contacto

                    <input type="text" value="{{$contact}}"   name="personaContacto" class="form-control">

                </div>





                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection