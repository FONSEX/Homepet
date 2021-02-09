
@extends('layouts.app')

@section ('content')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="col-sm-8">

        <div class="row">
            <div class="col">
                <h2>Reservas</h2>

            </div>


            <a href="{{route('reserva.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>


        <table class="table table-hover ">

            <thead>
              <tr>

                  <th width="20px">Numero de reserva</th>
                  <th width="20px">Fecha reservacion</th>
                  <th width="20px">Monto abonado</th>
                  <th width="20px">Fecha actividad</th>
                  <th width="20px">Servicio</th>
                  <th width="20px"></th>

                  <th width="80px"></th>

                  <th colspan="3">&nbsp;</th>
              </tr>

            </thead>
            @forelse( $reserva as $i )


                <td>{{$i ->num_reserva}}</td>
                <td>{{$i ->fecha_reservacion}}</td>
                <td>{{$i ->monto_abonado}}</td>
                <td>{{$i ->fecha_act}}</td>
                <td>{{$i ->cod_servicio}}</td>


                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('reserva.edit',$i->num_reserva)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('reserva.destroy',$i->num_reserva)}}" method="POST"  >
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
                <h2>Fichas de Registro</h2>

            </div>


            <a href="{{route('ficharegistro.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>


        <table class="table table-hover ">

            <thead>
            <tr>

                <th width="20px">ID</th>
                <th width="20px">ID Mascota</th>
                <th width="20px">ID Servicio</th>
                <th width="20px">Autorizado</th>
                <th width="20px">Fecha entrada</th>
                <th width="20px">Hora entrada</th>
                <th width="20px">Hora se</th>
                <th width="20px">Fecha sr</th>
                <th width="20px">Hora sr</th>
                <th width="20px">Fecha se</th>



                <th width="20px"></th>

                <th width="80px"></th>

                <th colspan="3">&nbsp;</th>
            </tr>

            </thead>
            @forelse( $ficharegistro as $i )


                <td>{{$i ->cod_ficha}}</td>
                <td>{{$i ->cod_mascota}}</td>
                <td>{{$i ->cod_servicio}}</td>
                <td>{{$i ->autorizado}}</td>
                <td>{{$i ->fechaent}}</td>
                <td>{{$i ->horaent}}</td>
                <td>{{$i ->horase}}</td>
                <td>{{$i ->fechasr}}</td>
                <td>{{$i ->horasr}}</td>
                <td>{{$i ->fechase}}</td>


                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('ficharegistro.edit',$i->cod_ficha)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('ficharegistro.destroy',$i->cod_ficha)}}" method="POST"  >
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














