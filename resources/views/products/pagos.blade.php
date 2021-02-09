
@extends('layouts.app')

@section ('content')


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="col-sm-8">

        <div class="row">
<div class="col">
    <h2>Facturas de los servicios</h2>

</div>


            <a href="{{route('facturaservicio.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>

        <table class="table table-hover">

            <thead>
            <tr>

                <th width="20px">ID</th>
                <th width="20px">Personal</th>
                <th width="20px">Fecha factura</th>
                <th width="20px">Monto factura</th>
                <th width="20px">Modalidad</th>
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


            @forelse( $facturaservicio as $i )


                <td>{{$i ->cod_fact}}</td>
                <td>{{$i ->cod_personal}}</td>
                <td>{{$i ->fecha_fact}}</td>
                <td>{{$i ->monto_fact}}</td>
                <td>{{$i ->cod_modalidad}}</td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('facturaservicio.edit',$i->rif)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('facturaservicio.destroy',$i->rif)}}" method="POST"  >
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
                <h2>Facturas de la tienda </h2>

            </div>


            <a href="{{route('facturatienda.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>

        <table class="table table-hover">

            <thead>
            <tr>

                <th width="20px">Factura </th>
                <th width="20px">Fecha</th>
                <th width="20px">Responsable</th>
                <th width="20px">Modalidad</th>
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


            @forelse( $facturatienda as $i )


                <td>{{$i ->numfact}}</td>
                <td>{{$i ->fecha}}</td>
                <td>{{$i ->cod_responsable}}</td>
                <td>{{$i ->cod_modalidad}}</td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('facturatienda.edit',$i->numfact)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('facturatienda.destroy',$i->numfact)}}" method="POST"  >
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
                <h2>Facturas del proveedor  </h2>

            </div>


            <a href="{{route('facturaproveedor.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>

        <table class="table table-hover">

            <thead>
            <tr>

                <th width="20px">Factura </th>
                <th width="20px">Fecha</th>
                <th width="20px">Monto</th>
                <th width="20px">Rif</th>
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


            @forelse( $facturaproveedor as $i )


                <td>{{$i ->n_fact}}</td>
                <td>{{$i ->fecha_factp}}</td>
                <td>{{$i ->monto_totalp}}</td>
                <td>{{$i ->rif}}</td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('facturaproveedor.edit',$i->rif)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('facturaproveedor.destroy',$i->rif)}}" method="POST"  >
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
                <h2>Facturas de productos de la tienda  </h2>

            </div>


            <a href="{{route('productos_factura_tienda.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>

        <table class="table table-hover">

            <thead>
            <tr>

                <th width="20px">ID </th>
                <th width="20px">Factura</th>
                <th width="20px">Cantidad</th>
                <th width="20px">Precio</th>
                <th width="20px">Descuento</th>
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


            @forelse( $productos_factura_tienda as $i )


                <td>{{$i ->cod_producto}}</td>
                <td>{{$i ->num_fact}}</td>
                <td>{{$i ->cantidad}}</td>
                <td>{{$i ->precio}}</td>
                <td>{{$i ->descuento}}</td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('productos_factura_tienda.edit',$i->rif)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('productos_factura_tienda.destroy',$i->rif)}}" method="POST"  >
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













@endsection














