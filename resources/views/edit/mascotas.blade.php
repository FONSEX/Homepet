@extends('layouts.app2')

@section ('content')


    <?php


    use App\raza;
    use App\responsable;
    use App\veterinario;

    $raza=raza::All();
    $responsable=responsable::All();
    $veterinario=veterinario::All();

    foreach ($mascotas as $variable) {
        $id=$variable->cod_mascota;
        $idR=$variable->cod_raza;
        $name= $variable->nombrem;
        $age=$variable->edadm;
        $sex=$variable->sexom;
        $height=$variable->pesom;
        $idV=$variable->cod_vet;
        $idResponsable=$variable->cod_responsable;
        $fechan=$variable->fechan;





    }

    ?>



    <form action="{{route('mascotas.update',$id)}}"  method="POST">
        @csrf
        @method('PUT')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Mascota

            </h2>

            <table class="table table-hover table-striped">

                <table class="table table-hover table-striped">

                    <div class="form-group" >
                        ID

                        <input type="text" value="{{$id}}"  name="cod_mascota" class="form-control" >

                    </div>

                    <div class="form-group" >
                        Raza

                        <select name="cod_raza" class="form-control" >
                        <option value="{{$idR}}">
                            Deje esta casilla asi para no modificar el valor
                        </option>

                        @foreach($raza as $variable)
                            <option value="{{$variable->cod_raza}}">{{$variable->nombrer}}</option>
                        @endforeach

                        </select>




                    </div>

                    <div class="form-group" >
                        Nombre

                        <input type="text" value="{{$name}}"   name="nombrem" class="form-control">

                    </div>

                    <div class="form-group" >
                        Edad

                        <input type="text" value="{{$age}}" name="edadm" class="form-control">

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

                        <input type="text"  value="{{$height}}"  name="pesom" class="form-control">

                    </div>

                    <div class="form-group" >
                        Veterinario

                        <select name="cod_vet" class="form-control" >
                            <option value="{{$idV}}">
                                Deje esta casilla asi para no modificar el valor
                            </option>

                            @foreach($veterinario as $variable)
                                <option value="{{$variable->cod_vet}}">{{$variable->nombrev}}</option>
                            @endforeach

                        </select>


                    </div>

                    <div class="form-group" >
                        Fecha de Nacimiendo

                        <input type="date"  value="{{$fechan}}"  name="fechan" class="form-control">

                    </div>

                    <div class="form-group" >
                       Responsable

                        <select name="cod_responsable" class="form-control" >
                            <option value="{{$idResponsable}}">
                                Deje esta casilla asi para no modificar el valor
                            </option>

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