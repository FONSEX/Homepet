@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($Reserva as $variable) {  //<------ aqui donde dice nombre tabla coloca el nombre de la tabla
        $id=$variable->num_reserva;         //<----- aqui coloca todas las variables que estan en esa tabla y
                                             //       bueno colocale un nombre a la variable de tu preferencia y si se
        $reservedate= $variable->fecha_reservacion;           //       acaban las variables crea otras dentro de ese foreach y si sobran borra las q sobraron ps
        $amount=$variable->monto_abonado;    // y lo que dice $variable dejalo asi ps
        $actdate=$variable->fecha_act;
        $serviceid=$variable->cod_servicio;


    }

    ?>



    <form action="{{route('Reserva.update',$id  //AQUI VAS A COLOCAR EL pk o id de la tabla    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Reserva <---------- BUENO YA DICE EXPLICITO QUE DEBES HACER XD

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    ID                      <---------- aqui colocas el valor que corresponde ejemplo si la tabla tiene solo la variable nombre y direccion tu aqui deberias colocar nombre y en el siguiente articulo colocas direccion

                    <input type="text"  value="{{$id         }}"  name="num_reserva" class="form-control">

                </div>

                <div class="form-group" >
                    Fecha de Reservación                <------ lo que te explique arriba jeje

                    <input type="text" value="{{$reservedate           }}"  name="fecha_reservacion" class="form-control">

                </div>

                <div class="form-group" >
                    Monto Abonado

                    <input type="text" value="{{$amount}}"   name="monto_abonado" class="form-control">

                </div>


                <div class="form-group" >
                    Fecha Actual

                    <input type="text" value="{{$actdate}}"   name="fecha_act" class="form-control">

                </div>

                <div class="form-group" >
                    ID Servicio

                    <input type="text" value="{{$serviceid}}"   name="cod_servicio" class="form-control">

                </div>



                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection