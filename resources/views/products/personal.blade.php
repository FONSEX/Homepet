
@extends('layouts.app')

@section ('content')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="col-sm-8">

        <div class="row">
            <div class="col">
                <h2>Listado del Personal</h2>

            </div>


            <a href="{{route('personal.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>


        <table class="table table-hover ">

            <thead>
              <tr>

                  <th width="20px">ID</th>
                  <th width="20px">Nombre</th>
                  <th width="20px">Direccion</th>
                  <th width="20px">Telefono</th>
                  <th width="20px">Sueldo</th>
                  <th width="20px"></th>

                  <th width="80px"></th>

                  <th colspan="3">&nbsp;</th>
              </tr>

            </thead>
            @forelse( $personal as $i )


                <td>{{$i ->cod_personal}}</td>
                <td>{{$i ->nombrep}}</td>
                <td>{{$i ->direccionp}}</td>
                <td>{{$i ->telefonop}}</td>
                <td>{{$i ->sueldop}}</td>


                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('personal.edit',$i->cod_personal)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('personal.destroy',$i->cod_personal)}}" method="POST"  >
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                    </form>

                </td>
                </tr>
            @empty

                <td>No hay informacion</td>


            @endforelse
        </table>


    </div>

    <th colspan="6">&nbsp;</th>



@endsection














