@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($VacunaPorRaza as $variable) {  //<------ aqui donde dice nombre tabla coloca el nombre de la tabla
        $vaccineid=$variable->cod_vacuna;         //<----- aqui coloca todas las variables que estan en esa tabla y
                                             //       bueno colocale un nombre a la variable de tu preferencia y si se
        $raceid= $variable->cod_raza;           //       acaban las variables crea otras dentro de ese foreach y si sobran borra las q sobraron ps
        $minage=$variable->edadMin;    // y lo que dice $variable dejalo asi ps
        $maxage=$variable->edadMax;
        $dosis=$variable->dosis;


    }

    ?>



    <form action="{{route('VacunaPorRaza.update',$id  //AQUI VAS A COLOCAR EL pk o id de la tabla    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Vacuna Por Raza <---------- BUENO YA DICE EXPLICITO QUE DEBES HACER XD

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    ID Vacuna                      <---------- aqui colocas el valor que corresponde ejemplo si la tabla tiene solo la variable nombre y direccion tu aqui deberias colocar nombre y en el siguiente articulo colocas direccion

                    <input type="text"  value="{{$vaccineid         }}"  name="cod_vacuna" class="form-control">

                </div>

                <div class="form-group" >
                    ID Raza                <------ lo que te explique arriba jeje

                    <input type="text" value="{{$raceid           }}"  name="cod_raza" class="form-control">

                </div>

                <div class="form-group" >
                    Edad Minina

                    <input type="text" value="{{$minage}}"   name="edadMin" class="form-control">

                </div>


                <div class="form-group" >
                    Edad Maxima

                    <input type="text" value="{{$maxage}}"   name="edadMax" class="form-control">

                </div>

                <div class="form-group" >
                    Dosis

                    <input type="text" value="{{$dosis}}"   name="dosis" class="form-control">

                </div>





                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection