@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($FichaRegistro as $variable) { 
        $id=$variable->cod_ficha;       
                                           
        $mascotid= $variable->cod_mascota;          
        $serviceid=$variable->cod_servicio;    
        $aut=$variable->autorizado;
        $datein=$variable->fechaEnt;
        $timein=$variable->horaEnt;
        $timeoe=$variable->horaSe;
        $dateor=$variable->fechaSr;
        $timeor=$variable->horaSr;
        $dateoe=$variable->fechaSe;


    }

    ?>



    <form action="{{route('FichaRegistro.update',$id    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Ficha Registro

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                  ID Fichas
                    <input type="text"  value="{{$id         }}"  name="cod_ficha" class="form-control">

                </div>

                <div class="form-group" >
                    ID Mascota               

                    <input type="text" value="{{$mascotid           }}"  name="cod_mascota" class="form-control">

                </div>

                <div class="form-group" >
                    ID Servicio

                    <input type="text" value="{{$serviceid}}"   name="cod_servicio" class="form-control">

                </div>


                <div class="form-group" >
                    Autorizado

                    <input type="text" value="{{$aut}}"   name="autorizado" class="form-control">

                </div>

                <div class="form-group" >
                    Fecha Entrada

                    <input type="text" value="{{$datein}}"   name="fechaEnt" class="form-control">

                </div>

                <div class="form-group" >
                    Hora Entrada

                    <input type="text" value="{{$timein}}"   name="horaEnt" class="form-control">

                </div>

                <div class="form-group" >
                    Hora Salida Estimada

                    <input type="text" value="{{$timeoe}}"   name="horaSe" class="form-control">

                </div>

                <div class="form-group" >
                    Fecha Salida Real

                    <input type="text" value="{{$dateor}}"   name="fechaSr" class="form-control">

                </div>

                <div class="form-group" >
                    Hora Salida Real

                    <input type="text" value="{{$timeor}}"   name="horaSr" class="form-control">

                </div>

                <div class="form-group" >
                    Fecha Salida Estimada

                    <input type="text" value="{{$dateoe}}"   name="fechaSe" class="form-control">

                </div>




                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection