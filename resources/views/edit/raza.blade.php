@extends('layouts.app2')

@section ('content')


    <?php

    use App\animal;
    use App\alimento;

    $animal=animal::All();
    $alimento=alimento::All();



    foreach ($raza as $variable) {
        $id= $variable->cod_raza;
        $idA= $variable->cod_animal;
        $name= $variable->nombrer;
        $description= $variable->descripcionr;
        $country= $variable->paisorigen;
        $inteligency= $variable->nivel_inteligencia;
        $contexture= $variable->contextura_fuerte;
        $heightMin= $variable->altura_min;
        $heightMax= $variable->altura_max;
        $DiaryPortion= $variable->porcion_diaria;
        $size= $variable->talla;
        $color= $variable->color_pelaje;
        $idAlim= $variable->cod_alimento;
    }

    ?>



    <form action="{{route('raza.update',$variable->cod_raza)}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Raza

            </h2>



            <table class="table table-hover table-striped">


                <div class="form-group" >
                    ID

                    <input type="text"  value="{{$id}}"  name="cod_raza" class="form-control" >

                </div>



                <div class="form-group" >
                    Tipo de Animal


                    <select name="cod_animal" class="form-control" >

                        <option value="{{$idA}}">
                            Deje esta casilla asi para no modificar el valor
                        </option>


                        @foreach($animal as $variable)
                            <option value="{{$variable->cod_animal}}">{{$variable->nombrea}}</option>
                        @endforeach

                    </select>



                </div>

                <div class="form-group" >
                    Nombre

                    <input type="text"  value="{{$name}}"  name="nombrer" class="form-control">

                </div>

                <div class="form-group" >
                    Descripcion

                    <input type="text" value="{{$description}}"  name="descripcionr" class="form-control">

                </div>

                <div class="form-group" >
                    Pais de Origen

                    <input type="text" value="{{$country}}"   name="paisorigen" class="form-control">

                </div>

                <div class="form-group" >
                    Nivel de Inteligencia



                    <select name="nivel_inteligencia" class="form-control" >

                        <option value="{{$inteligency}}">
                            Deje esta casilla asi para no modificar el valor
                        </option>

                        <option value="Bajo">Bajo</option>
                        <option value="Medio">Medio</option>
                        <option value="Alto">Alto</option>



                    </select>



                </div>


                <div class="form-group" >
                    Contextura


                    <select name="contextura_fuerte"class="form-control" >


                        <option value="{{$contexture}}">
                            Deje esta casilla asi para no modificar el valor
                        </option>

                        <option value="N">N</option>
                        <option value="S">S</option>



                    </select>




                </div>


                <div class="form-group" >
                    Altura Min

                    <input type="text" value="{{$heightMin}}"   name="altura_min" class="form-control">

                </div>


                <div class="form-group" >
                    Altura Max

                    <input type="text" value="{{$heightMax}}"   name="altura_max" class="form-control">

                </div>


                <div class="form-group" >
                    Porcion Diaria

                    <input type="text" value="{{$DiaryPortion}}"   name="porcion_diaria" class="form-control">

                </div>


                <div class="form-group" >
                    Talla



                    <select name="talla" class="form-control" >


                        <option value="{{$size}}">
                            Deje esta casilla asi para no modificar el valor
                        </option>


                        <option value="P">P</option>
                        <option value="M">M</option>
                        <option value="G">G</option>



                    </select>



                </div>


                <div class="form-group" >
                    Color  del Pelaje

                    <input type="text" value="{{$color}}"   name="color_pelaje" class="form-control">

                </div>


                <div class="form-group" >
                   Alimento


                    <select name="cod_alimento" class="form-control" >

                        <option value="{{$idAlim}}">
                            Deje esta casilla asi para no modificar el valor
                        </option>

                        @foreach($alimento as $variable)
                            <option value="{{$variable->cod_alimento}}">{{$variable->nombrealimento}}</option>
                        @endforeach

                    </select>




                </div>






                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection














