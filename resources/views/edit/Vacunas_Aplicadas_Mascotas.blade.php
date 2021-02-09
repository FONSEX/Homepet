@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($Vacunas_Aplicadas_Mascotas as $variable) {  //<------ aqui donde dice nombre tabla coloca el nombre de la tabla
        $appdate=$variable->fechaAplicacion;         //<----- aqui coloca todas las variables que estan en esa tabla y
                                             //       bueno colocale un nombre a la variable de tu preferencia y si se
        $vacid= $variable->cod_vacuna;           //       acaban las variables crea otras dentro de ese foreach y si sobran borra las q sobraron ps
        $mascotid=$variable->cod_mascota;    // y lo que dice $variable dejalo asi ps
  

    }

    ?>



    <form action="{{route('Vacunas_Aplicadas_Mascotas.update',$id     )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Vacunas Aplicadas por Mascota 

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Fecha Aplicación                      

                    <input type="text"  value="{{$appdate         }}"  name="fechaAplicacion" class="form-control">

                </div>

                <div class="form-group" >
                    ID Vacuna                

                    <input type="text" value="{{$vacid           }}"  name="cod_vacuna" class="form-control">

                </div>

                <div class="form-group" >
                    ID Mascota

                    <input type="text" value="{{$mascotid}}"   name="cod_mascota" class="form-control">

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection