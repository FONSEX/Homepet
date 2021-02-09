@extends('layouts.app2')

@section ('content')

    <form action="{{route('alimento.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Alimento

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    ID

                    <input type="text"   name="cod_alimento" class="form-control" >

                </div>

                <div class="form-group" >
                    Nombre

                    <input type="text"   name="nombrealimento" class="form-control" >

                </div>

                <div class="form-group" >
                    Costo<input type="text"    name="costoalimento" class="form-control">

                </div>
                <div class="form-group" >
                    Descripcion
                    <textarea  name="descripcionalimento" class="form-control"></textarea>

                </div>
                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong>  </button></table></div></form>

@endsection