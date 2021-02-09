
@extends('layouts.app')

@section ('content')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="col-sm-8">
        <div class="row">
            <div class="col">
                <h2>Listado de Servicios</h2>

            </div>


            <a href="{{route('servicio.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>


        <table class="table table-hover">

            <thead>
              <tr>

                  <th width="20px">ID</th>
                  <th width="20px">Nombre</th>
                  <th width="20px">Disponibilidad</th>
                  <th width="20px">Descripcion</th>
                  <th width="20px">Personal a cargo</th>

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
            @forelse( $servicio as $i )


                <td>{{$i ->cod_servicio}}</td>
                <td>{{$i ->nombres}}</td>
                <td>{{$i ->disponibilidad}}</td>
                <td>{{$i ->descripcions}}</td>
                <td>{{$i ->cod_personal}}</td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('servicio.edit',$i->cod_servicio)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('servicio.destroy',$i->cod_servicio)}}" method="POST"  >
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



    <div class="col-sm-8">
        <div class="row">
            <div class="col">
                <h2>Actividades </h2>

            </div>


            <a href="{{route('actividad.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>


        <table class="table table-hover">

            <thead>
            <tr>

                <th width="20px">Numero actividad</th>
                <th width="20px">Servicio Correspondiente</th>
                <th width="20px">Descripcion</th>
                <th width="20px">Capacidad Atencion</th>


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
            @forelse( $actividad as $i )


                <td>{{$i ->num_act}}</td>
                <td>{{$i ->cod_servicio}}</td>
                <td>{{$i ->descripcionact}}</td>
                <td>{{$i ->capacidad_atencion}}</td>


                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('actividad.edit')}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('actividad.destroy',$i->cod_servicio)}}" method="POST"  >
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


    <div class="col-sm-8">
        <div class="row">
            <div class="col">
                <h2>Orden de usos</h2>

            </div>


            <a href="{{route('Ordendeuso.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>


        <table class="table table-hover">

            <thead>
            <tr>

                <th width="20px">ID</th>
                <th width="20px">Producto usado</th>
                <th width="20px">Fecha uso</th>
                <th width="20px">Personal</th>
                <th width="20px">Servicio</th>
                <th width="20px">Cantidad</th>

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
            @forelse( $ordendeuso as $i )


                <td>{{$i ->cod_orden}}</td>
                <td>{{$i ->cod_producto}}</td>
                <td>{{$i ->fecha_uso}}</td>
                <td>{{$i ->cod_personal}}</td>
                <td>{{$i ->cod_servicio}}</td>
                <td>{{$i ->cant_producto}}</td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('Ordendeuso.edit',$i->cod_servicio)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('Ordendeuso.destroy',$i->cod_servicio)}}" method="POST"  >
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


    <div class="col-sm-8">
        <div class="row">
            <div class="col">
                <h2>Inventario</h2>

            </div>


            <a href="{{route('inventario.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>


        <table class="table table-hover">

            <thead>
            <tr>

                <th width="20px">ID</th>
                <th width="20px">Fecha ajuste</th>
                <th width="20px">Producto</th>
                <th width="20px">Cantidad</th>
                <th width="20px">Tipo Ajuste</th>


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
            @forelse( $inventario as $i )


                <td>{{$i ->cod_ajuste}}</td>
                <td>{{$i ->fecha_ajuste}}</td>
                <td>{{$i ->cod_producto}}</td>
                <td>{{$i ->cantidadinv}}</td>
                <td>{{$i ->tipoajuste}}</td>


                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('inventario.edit',$i->cod_servicio)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('inventario.destroy',$i->cod_servicio)}}" method="POST"  >
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














