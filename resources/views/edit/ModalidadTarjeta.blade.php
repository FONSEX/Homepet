@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($ModalidadTarjeta as $variable) { 
        $id=$variable->cod_modalidad;       
                                           
        $date= $variable->fecha_pagoT;          
        $amount=$variable->montoT;    
        $bankname=$variable->nombreBancoT;
        $cardnum=$variable->num_tarjeta;


    }

    ?>



    <form action="{{route('ModalidadTarjeta.update',$id    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Modalidad Tarjeta

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                  ID Modalidad
                    <input type="text"  value="{{$id         }}"  name="cod_modalidad" class="form-control">

                </div>

                <div class="form-group" >
                    Fecha Pago               

                    <input type="text" value="{{$date           }}"  name="fecha_pagoT" class="form-control">

                </div>

                <div class="form-group" >
                    Monto 

                    <input type="text" value="{{$amount}}"   name="montoT" class="form-control">

                </div>


                <div class="form-group" >
                    Nombre Banco

                    <input type="text" value="{{$bankname}}"   name="nombreBancoT" class="form-control">

                </div>

                <div class="form-group" >
                    Numero Tarjeta

                    <input type="text" value="{{$carudnum}}"   name="num_tarjeta" class="form-control">

                </div>





                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection