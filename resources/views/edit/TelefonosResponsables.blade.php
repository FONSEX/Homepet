@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($TelefonosResponsables as $variable) {  //<------ aqui donde dice nombre tabla coloca el nombre de la tabla
        $respid=$variable->cod_responsable;         //<----- aqui coloca todas las variables que estan en esa tabla y
                                             //       bueno colocale un nombre a la variable de tu preferencia y si se
        $phone= $variable->Ntelefono;           //       acaban las variables crea otras dentro de ese foreach y si sobran borra las q sobraron ps


    }

    ?>



    <form action="{{route('TelefonosResponsables.update',$id     )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Telefonos Responsables 

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    ID Responsable                    

                    <input type="text"  value="{{$respid         }}"  name="cod_responsable" class="form-control">

                </div>

                <div class="form-group" >
                    Numero Telefono                

                    <input type="text" value="{{$phone           }}"  name="Ntelefono" class="form-control">

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection