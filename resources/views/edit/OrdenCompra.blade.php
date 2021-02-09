@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($OrdenCompra as $variable) { 
        $id=$variable->cod_compra;       
                                           
        $buydate= $variable->fechaComp;          
        $rifb=$variable->RIF;    


    }

    ?>



    <form action="{{route('OrdenCompra.update',$id    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Orden Compra

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                  ID Compra
                    <input type="text"  value="{{$id         }}"  name="cod_compra" class="form-control">

                </div>

                <div class="form-group" >
                    Fecha Compra               

                    <input type="text" value="{{$buydate           }}"  name="fechaComp" class="form-control">

                </div>

                <div class="form-group" >
                    RIF

                    <input type="text" value="{{$rifb}}"   name="RIF" class="form-control">

                </div>



                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection