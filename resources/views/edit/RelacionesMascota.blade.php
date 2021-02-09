@extends('layouts.app2')

@section ('content')


    <?php


    foreach ($RelacionesMascota as $variable) { 
        $parent=$variable->parentesco;       
                                           
        $mascotid= $variable->cod_mascota;          
        $mascrid=$variable->cod_mascotaRelacion;    

    }

    ?>



    <form action="{{route('RelacionesMascota.update',$id    )}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Relaciones Mascota

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                        Parentesco
                    <input type="text"  value="{{$parent         }}"  name="parentesco" class="form-control">

                </div>

                <div class="form-group" >
                    ID Mascota               

                    <input type="text" value="{{$mascotid           }}"  name="cod_mascota" class="form-control">

                </div>

                <div class="form-group" >
                    ID MascotaRelacion

                    <input type="text" value="{{$mascrid}}"   name="cod_mascotaRelacion" class="form-control">

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection