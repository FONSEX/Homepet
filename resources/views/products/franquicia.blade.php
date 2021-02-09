
@extends('layouts.app')

@section ('content')


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="col-sm-8">

        <div class="row">
<div class="col">
    <h2>Franquicia</h2>

</div>


            <a href="{{route('franquicia.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>

        <table class="table table-hover">

            <thead>
            <tr>

                <th width="20px">Rif</th>
                <th width="20px">Ciudad</th>
                <th width="20px">Capacidad</th>
                <th width="20px"></th>
                <th width="20px"></th>
                <th width="20px"></th>
                <th width="20px"></th>
                <th width="20px"></th>
                <th width="20px"></th>
                <th width="20px"></th>
                <th width="20px"></th>

                <th colspan="3">&nbsp;</th>
            </tr>

            </thead>
            <tbody>


            @forelse( $franquicia as $i )


                <td>{{$i ->rif}}</td>
                <td>{{$i ->ciudad}}</td>
                <td>{{$i ->capacidad}}</td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('franquicia.edit',$i->rif)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('franquicia.destroy',$i->rif)}}" method="POST"  >
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                    </form>

                </td>
                </tr>
            @empty

                <td>No hay informacion</td>


            @endforelse


            </tbody>
        </table>
    </div>


    <th colspan="6">&nbsp;</th>


    <div class="col-sm-8">

        <div class="row">
            <div class="col">
                <h2>Encargado</h2>

            </div>


            <a href="{{route('encargado.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>


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
                  <th width="20px"></th>
                  <th width="20px"></th>
                  <th width="20px"></th>
                  <th width="20px"></th>
                  <th width="20px"></th>
                  <th width="20px"></th>


                  <th colspan="3">&nbsp;</th>
              </tr>

            </thead>
          <tbody>


          @forelse( $encargados as $encargado )


                  <td>{{$encargado ->cod_encargado}}</td>
                  <td>{{$encargado ->nombree}}</td>
                  <td>{{$encargado ->direccione}}</td>
                  <td>{{$encargado ->telefonoe}}</td>
                  <td>{{$encargado ->sueldoe}}</td>
                  <td> </td>
              <td>

                      <a class="btn btn-warning" href="{{route('encargado.edit',$encargado->cod_encargado)}}"    >  <strong>editar</strong>  </a>

              </td>
                  <td>

                  <form action="{{route('encargado.destroy',$encargado->cod_encargado)}}" method="POST"  >
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                  </form>

                  </td>
              </tr>
          @empty

              <td>No hay informacion</td>


          @endforelse


          </tbody>
        </table>

    </div>

    <th colspan="6">&nbsp;</th>

    <div class="col-sm-8">


        <div class="row">
            <div class="col">
                <h2>Animales Especializados</h2>

            </div>


            <a href="{{route('animal.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>


        </div>
        <th colspan="3">&nbsp;</th>


        <table class="table table-hover  ">

            <thead>
            <tr>

                <th width="20px">ID</th>
                <th width="20px">Nombre</th>
                <th width="20px">Descripcion</th>
                <th width="20px"></th>

                <th width="20px"></th>
                <th width="20px"></th>
                <th width="20px"></th>
                <th width="20px"></th>
                <th width="20px"></th>
                <th width="20px"></th>

                <th colspan="3">&nbsp;</th>
            </tr>

            </thead>
            <tbody>


            @forelse( $animal as $i )


                <td>{{$i ->cod_animal}}</td>
                <td>{{$i ->nombrea}}</td>
                <td>{{$i ->descripciona}}</td>

                <td> </td>
                <td>

                    <div class="col">

                    <a class="btn btn-warning" href="{{route('animal.edit',$i ->cod_animal)}}"    >  <strong>editar</strong>  </a>

                </div>
                <td>
                    <div class="col">


                    <form action="{{route('animal.destroy',$i ->cod_animal)}}" method="POST"  >
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                    </form>
                    </div>

                </td>
                </tr>
            @empty

                <td>No hay informacion</td>


            @endforelse


            </tbody>
        </table>


    </div>

    <th colspan="6">&nbsp;</th>


@endsection














