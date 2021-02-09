@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($ModalidadEfectivo as $variable) { 
        $id=$variable->cod_modalidad;       
                                           
        $date= $variable->fecha_pagoE;          
        $amount=$variable->montoE;    
 

    }

    ?>



    <form action="{{route('ModalidadEfectivo.update',$id    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Modalidad Efectivo

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                  ID Modalidad
                    <input type="text"  value="{{$id         }}"  name="cod_modalidad" class="form-control">

                </div>

                <div class="form-group" >
                    Fecha de Pago               

                    <input type="text" value="{{$date           }}"  name="fecha_pagoE" class="form-control">

                </div>

                <div class="form-group" >
                    Monto

                    <input type="text" value="{{$amount}}"   name="montoE" class="form-control">

                </div>




                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection