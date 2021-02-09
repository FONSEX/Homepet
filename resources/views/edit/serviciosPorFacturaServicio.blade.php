@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($ServiciosPorFacturaServicio as $variable) {  //<------ aqui donde dice nombre tabla coloca el nombre de la tabla
        $serviceid=$variable->cod_personal;         //<----- aqui coloca todas las variables que estan en esa tabla y
                                             //       bueno colocale un nombre a la variable de tu preferencia y si se
        $factid= $variable->nombrep;           //       acaban las variables crea otras dentro de ese foreach y si sobran borra las q sobraron ps


    }

    ?>



    <form action="{{route('ServiciosPorFacturaServicio.update',$id  //AQUI VAS A COLOCAR EL pk o id de la tabla    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: ServiciosPorFacturaServicio <---------- BUENO YA DICE EXPLICITO QUE DEBES HACER XD

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    ID Servicio                      <---------- aqui colocas el valor que corresponde ejemplo si la tabla tiene solo la variable nombre y direccion tu aqui deberias colocar nombre y en el siguiente articulo colocas direccion

                    <input type="text"  value="{{$serviceid         }}"  name="cod_servicio" class="form-control">

                </div>

                <div class="form-group" >
                    ID Factura                <------ lo que te explique arriba jeje

                    <input type="text" value="{{$factid           }}"  name="cod_fact" class="form-control">

                </div>



                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection