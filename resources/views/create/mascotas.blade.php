@extends('layouts.app2')

@section ('content')


    <?php

    use App\raza;
    use App\responsable;
    use App\veterinario;

    $raza=raza::All();
    $responsable=responsable::All();
    $veterinario=veterinario::All();

    ?>

    <form action="{{route('mascotas.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nueva: Mascota

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    ID

                    <input type="text"   name="cod_mascota" class="form-control" >

                </div>

                <div class="form-group" >
                    Raza

                    <select name="cod_raza" class="form-control" >


                    @foreach($raza as $variable)
                        <option value="{{$variable->cod_raza}}">{{$variable->nombrer}}</option>
                    @endforeach

                    </select>


                </div>

                <div class="form-group" >
                    Nombre

                    <input type="text"    name="nombrem" class="form-control">

                </div>

                <div class="form-group" >
                    Edad

                    <input type="text"  name="edadm" class="form-control">

                </div>

                <div class="form-group" >
                    Sexo

                    <select name="sexom" class="form-control" >

                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>



                    </select>

                </div>


                <div class="form-group" >
                    Peso

                    <input type="text"    name="pesom" class="form-control">

                </div>

                <div class="form-group" >
                    Veterinario


                    <select name="cod_vet" class="form-control" >


                        @foreach($veterinario as $variable)
                            <option value="{{$variable->cod_vet}}">{{$variable->nombrev}}</option>
                        @endforeach

                    </select>




                </div>

                <div class="form-group" >
                    Fecha de Nacimiendo

                    <input type="date"    name="fechan" class="form-control">

                </div>

                <div class="form-group" >
                    Responsable

                    <select name="cod_responsable" class="form-control" >


                        @foreach($responsable as $variable)
                            <option value="{{$variable->cod_responsable}}">{{$variable->nombrer}}</option>
                        @endforeach

                    </select>


                </div>






                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection