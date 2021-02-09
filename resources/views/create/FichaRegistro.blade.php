@extends('layouts.app2')

@section ('content')

    <form action="{{route('FichaRegistro.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Ficha Registro

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    ID Ficha                         


                  
                    <input type="text"   name="cod_ficha" class="form-control" >

                </div>

                <div class="form-group" >
                    ID Mascota

                    <input type="text"   name="cod_mascota" class="form-control" >

                </div>

                <div class="form-group" >
                    ID Servicio

                    <input type="text"    name="cod_servicio" class="form-control">

                </div>

                <div class="form-group" >
                    Autorizado

                    <input type="text"  name="autorizado" class="form-control">

                </div>

                <div class="form-group" >
                    Fecha Entrada

                    <input type="text"    name="fechaEnt" class="form-control">

                </div>

                
                <div class="form-group" >
                    Hora Entrada

                    <input type="text"    name="horaEnt" class="form-control">

                </div>

                
                <div class="form-group" >
                    Hora Salida Estimada

                    <input type="text"    name="horaSe" class="form-control">

                </div>

                
                <div class="form-group" >
                    Fecha Salida Real

                    <input type="text"    name="fechaSr" class="form-control">

                </div>

                
                <div class="form-group" >
                    Hora Salida Real 

                    <input type="text"    name="horaSr" class="form-control">

                </div>

                
                <div class="form-group" >
                    Fecha Salida Estimada

                    <input type="text"    name="fechaSe" class="form-control">

                </div>





                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection