
@extends('layouts.app')

@section ('content')


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="col-sm-8">

        <div class="row">
            <div class="col">
                <h2>Ordenes de compra </h2>

            </div>


            <a href="{{route('ordencompra.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>

        <table class="table table-hover ">

            <thead>
            <tr>

                <th width="20px">ID</th>
                <th width="20px">Fecha Compra</th>
                <th width="20px">RIF</th>


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


            @forelse( $ordencompra as $i )


                <td>{{$i ->cod_compra}}</td>
                <td>{{$i ->fechacomp}}</td>
                <td>{{$i ->rif}}</td>



                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('ordencompra.edit',$i ->cod_compra)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('ordencompra.destroy',$i ->cod_compra)}}" method="POST"  >
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
                <h2>Productos de las  Ordenes de compra </h2>

            </div>


            <a href="{{route('productos_orden_compra.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>

        <table class="table table-hover ">

            <thead>
            <tr>

                <th width="20px">ID Compra</th>
                <th width="20px">Producto</th>
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
            <tbody>


            @forelse( $productos_orden_compra as $i )


                <td>{{$i ->cod_compra}}</td>
                <td>{{$i ->cod_producto}}</td>
                <td>{{$i ->cantidad}}</td>



                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('productos_orden_compra.edit',$i ->cod_compra)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('productos_orden_compra.destroy',$i ->cod_compra)}}" method="POST"  >
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
                <h2>Alimentos</h2>

            </div>


            <a href="{{route('alimento.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>

        <table class="table table-hover ">

            <thead>
            <tr>

                <th width="20px">ID</th>
                <th width="20px">Nombre</th>
                <th width="20px">Costo</th>
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


            @forelse( $alimento as $i )


                <td>{{$i ->cod_alimento}}</td>
                <td>{{$i ->nombrealimento}}</td>
                <td>{{$i ->costoalimento}}</td>
                <td>{{$i ->descripcionalimento}}</td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('alimento.edit',$i ->cod_alimento)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('alimento.destroy',$i ->cod_alimento)}}" method="POST"  >
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
                <h2>Proveedores</h2>

            </div>


            <a href="{{route('proveedor.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>

        <table class="table table-hover ">

            <thead>
            <tr>

                <th width="20px">RIF</th>
                <th width="20px">Nombre</th>
                <th width="20px">Direccion</th>
                <th width="20px">Telefono Local</th>
                <th width="20px">Telefono Celular</th>
                <th width="20px">Persona contacto</th>


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


            @forelse( $proveedor as $i )


                <td>{{$i ->rifproveedor}}</td>
                <td>{{$i ->nombreprov}}</td>
                <td>{{$i ->direccionprov}}</td>
                <td>{{$i ->telefonolocalprov}}</td>
                <td>{{$i ->telefonocelularprov}}</td>
                <td>{{$i ->personacontacto}}</td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('proveedor.edit',$i ->rifproveedor)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('proveedor.destroy',$i ->rifproveedor)}}" method="POST"  >
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
                <h2>Productos</h2>

            </div>


            <a href="{{route('producto.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>

        <table class="table table-hover ">

            <thead>
            <tr>

                <th width="20px">ID</th>
                <th width="20px">Nombre</th>
                <th width="20px">Descripcion</th>
                <th width="20px">Costo</th>



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


            @forelse( $producto as $i )


                <td>{{$i ->cod_producto}}</td>
                <td>{{$i ->nombrep}}</td>
                <td>{{$i ->descripcionp}}</td>
                <td>{{$i ->costop}}</td>



                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('producto.edit',$i ->cod_producto)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('producto.destroy',$i ->cod_producto)}}" method="POST"  >
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
                <h2>Productos distribuidos por los proveedores</h2>

            </div>


            <a href="{{route('productos_distribuidos_proveedor.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>

        <table class="table table-hover ">

            <thead>
            <tr>

                <th width="20px">RIF Proveedor</th>
                <th width="20px">Producto</th>




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


            @forelse( $productos_distribuidos_proveedor as $i )


                <td>{{$i ->rifproveedor}}</td>
                <td>{{$i ->cod_producto}}</td>



                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('productos_distribuidos_proveedor.edit',$i ->rifproveedor)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('productos_distribuidos_proveedor.destroy',$i ->rifproveedor)}}" method="POST"  >
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
                <h2>Facturas de los Productos de los proveedores</h2>

            </div>


            <a href="{{route('productos_factura_proveedor.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>

        <th colspan="3">&nbsp;</th>

        <table class="table table-hover ">

            <thead>
            <tr>

                <th width="20px">RIF Proveedor</th>
                <th width="20px">Producto</th>
                <th width="20px">Cantidad</th>
                <th width="20px">Precio</th>




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


            @forelse( $productos_factura_proveedor as $i )


                <td>{{$i ->rifproveedor}}</td>
                <td>{{$i ->cod_producto}}</td>
                <td>{{$i ->cantidad}}</td>
                <td>{{$i ->precio}}</td>


                <td> </td>
                <td>

                    <a class="btn btn-warning" href="{{route('productos_factura_proveedor.edit',$i ->rifproveedor)}}"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="{{route('productos_factura_proveedor.destroy',$i ->rifproveedor)}}" method="POST"  >
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














