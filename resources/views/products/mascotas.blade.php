
@extends('layouts.app')

@section ('content')


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">



    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Mascotas</h2>

            </div>


            <a href="{{route('mascotas.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>
        <th colspan="3">&nbsp;</th>

        <table class="table table-hover  ">

            <thead>
              <tr>

                  <th width="20px">ID</th>
                  <th width="20px">ID Raza </th>
                  <th width="20px">Nombre</th>
                  <th width="20px">Edad</th>
                  <th width="20px">Sexo</th>
                  <th width="20px">Peso</th>
                  <th width="20px">ID Veterinario</th>
                  <th width="20px">ID Responsable</th>
                  <th width="20px">Fecha Nacimiento</th>
                  <th colspan="3">&nbsp;</th>
              </tr>

            </thead>
          <tbody>


          @forelse( $mascotas as $mascota )
                <tr>


                    <td>{{$mascota->cod_mascota}}</td>
                    <td>{{$mascota->cod_raza}}</td>
                    <td>{{$mascota->nombrem}}</td>
                    <td>{{$mascota->edadm}}</td>
                    <td>{{$mascota->sexom}}</td>
                    <td>{{$mascota->pesom}}</td>
                    <td>{{$mascota->cod_vet}}</td>
                    <td>{{$mascota->cod_responsable}}</td>
                    <td>{{$mascota->fechan}}</td>
                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="{{route('mascotas.edit',$mascota->cod_mascota)}}"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="{{route('mascotas.destroy',$mascota->cod_mascota)}}" method="POST"  >
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

    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Enfermedades sufridas por las mascotas</h2>

            </div>


            <a href="{{route('enfermedades_sufridas_mascotas.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>
        <th colspan="3">&nbsp;</th>

        <table class="table table-hover  ">

            <thead>
            <tr>

                <th width="20px">Enfermedad</th>
                <th width="20px">Mascota</th>

                <th colspan="3">&nbsp;</th>
            </tr>

            </thead>
            <tbody>


            @forelse( $enfermedades_sufridas_mascotas as $mascota )
                <tr>


                    <td>{{$mascota->nombreenf}}</td>
                    <td>{{$mascota->cod_mascota}}</td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="{{route('enfermedades_sufridas_mascotas.edit',$mascota->cod_mascota)}}"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="{{route('enfermedades_sufridas_mascotas.destroy',$mascota->cod_mascota)}}" method="POST"  >
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


    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Vacunas aplicadas a mascotas</h2>

            </div>


            <a href="{{route('vacunas_aplicadas_mascotas.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>
        <th colspan="3">&nbsp;</th>

        <table class="table table-hover  ">

            <thead>
            <tr>

                <th width="20px">Vacuna</th>
                <th width="20px">Mascota </th>
                <th width="20px">Fecha Aplicacion</th>

                <th colspan="3">&nbsp;</th>
            </tr>

            </thead>
            <tbody>


            @forelse( $vacunas_aplicadas_mascotas as $mascota )
                <tr>


                    <td>{{$mascota->cod_vacuna}}</td>
                    <td>{{$mascota->cod_mascota}}</td>
                    <td>{{$mascota->fechaaplicacion}}</td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="{{route('vacunas_aplicadas_mascotas.edit',$mascota->cod_mascota)}}"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="{{route('vacunas_aplicadas_mascotas.destroy',$mascota->cod_mascota)}}" method="POST"  >
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

    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Relaciones de mascotas</h2>

            </div>


            <a href="{{route('relacionesmascota.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>
        <th colspan="3">&nbsp;</th>

        <table class="table table-hover  ">

            <thead>
            <tr>

                <th width="20px">Mascota</th>
                <th width="20px">Mascota Relacion</th>
                <th width="20px">Parentesco</th>
                <th colspan="3">&nbsp;</th>
            </tr>

            </thead>
            <tbody>


            @forelse( $relacionesmascota as $mascota )
                <tr>

                    <td>{{$mascota->cod_mascota}}</td>
                    <td>{{$mascota->cod_mascotarelacion}}</td>
                    <td>{{$mascota->parentesco}}</td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="{{route('relacionesmascota.edit',$mascota->cod_mascota)}}"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="{{route('relacionesmascota.destroy',$mascota->cod_mascota)}}" method="POST"  >
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
            <h2>Responsables</h2>

        </div>


        <a href="{{route('responsable.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
    </div>

    <th colspan="3">&nbsp;</th>


        <table class="table table-hover  ">

            <thead>
            <tr>

                <th width="20px">ID</th>
                <th width="20px">Nombre</th>
                <th width="20px">Correo</th>
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


            @forelse( $responsable as $i )
                <tr>

                    <td>{{$i->cod_responsable}}</td>
                    <td>{{$i->nombrer}}</td>
                    <td>{{$i->emailr}}</td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="{{route('responsable.edit',$i->cod_responsable)}}"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="{{route('responsable.destroy',$i->cod_responsable)}}" method="POST"  >
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




    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Telefonos de Responsables</h2>

            </div>


            <a href="{{route('telefonosresponsables.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>
        <th colspan="3">&nbsp;</th>

        <table class="table table-hover  ">

            <thead>
            <tr>

                <th width="20px">Responsable</th>
                <th width="20px">Telefono</th>
                <th colspan="3">&nbsp;</th>
            </tr>

            </thead>
            <tbody>


            @forelse( $telefonosresponsables as $mascota )
                <tr>


                    <td>{{$mascota->cod_responsable}}</td>
                    <td>{{$mascota->ntelefono}}</td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="{{route('telefonosresponsables.edit',$mascota->cod_responsable)}}"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="{{route('telefonosresponsables.destroy',$mascota->cod_responsable)}}" method="POST"  >
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
            <h2>Veterinarios</h2>

        </div>


        <a href="{{route('veterinario.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
    </div>

    <th colspan="3">&nbsp;</th>
        <table class="table table-hover  ">

            <thead>
            <tr>

                <th width="20px">ID</th>
                <th width="20px">Nombre</th>
                <th width="20px">Telefono</th>
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


            @forelse( $veterinario as $i )
                <tr>

                    <td>{{$i->cod_vet}}</td>
                    <td>{{$i->nombrev}}</td>
                    <td>{{$i->telefonov}}</td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="{{route('veterinario.edit',$i->cod_vet)}}"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="{{route('veterinario.destroy',$i->cod_vet)}}" method="POST"  >
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



    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Vacunas</h2>

            </div>


            <a href="{{route('vacuna.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>
        <th colspan="3">&nbsp;</th>

        <table class="table table-hover  ">

            <thead>
            <tr>

                <th width="20px">ID</th>
                <th width="20px">Monto </th>
                <th width="20px">Nombre</th>
                <th width="20px">Descripcion</th>
                <th colspan="3">&nbsp;</th>
            </tr>

            </thead>
            <tbody>


            @forelse( $vacuna as $mascota )
                <tr>


                    <td>{{$mascota->cod_vacuna}}</td>
                    <td>{{$mascota->montovacuna}}</td>
                    <td>{{$mascota->nombrevacuna}}</td>
                    <td>{{$mascota->descripcionvacuna}}</td>
                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="{{route('vacuna.edit',$mascota->cod_vacuna)}}"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="{{route('vacuna.destroy',$mascota->cod_vacuna)}}" method="POST"  >
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
            <h2>Razas</h2>

        </div>


        <a href="{{route('raza.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
    </div>

    <th colspan="3">&nbsp;</th>
        <table class="table table-hover  ">

            <thead>
            <tr>

                <th width="20px">ID</th>
                <th width="20px">ID Animal</th>
                <th width="20px">Nombre</th>
                <th width="20px">Descripcion</th>
                <th width="20px">Pais Origen</th>
                <th width="20px">Inteligencia</th>
                <th width="20px">Contextura</th>
                <th width="20px">Altura Min</th>
                <th width="20px">Altura Max</th>
                <th width="20px">Porcion Diaria</th>
                <th width="20px">Talla</th>
                <th width="20px">Color Pelaje</th>
                <th width="20px">ID Alimento</th>
                <th colspan="3">&nbsp;</th>
            </tr>

            </thead>
            <tbody>


            @forelse( $raza as $i )
                <tr>

                    <td>{{$i->cod_raza}}</td>
                    <td>{{$i->cod_animal}}</td>
                    <td>{{$i->nombrer}}</td>
                    <td>{{$i->descripcionr}}</td>
                    <td>{{$i->paisorigen}}</td>
                    <td>{{$i->nivel_inteligencia}}</td>
                    <td>{{$i->contextura_fuerte}}</td>
                    <td>{{$i->altura_min}}</td>
                    <td>{{$i->altura_max}}</td>
                    <td>{{$i->porcion_diaria}}</td>
                    <td>{{$i->talla}}</td>
                    <td>{{$i->color_pelaje}}</td>
                    <td>{{$i->cod_alimento}}</td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="{{route('raza.edit',$i->cod_raza)}}"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="{{route('raza.destroy',$i->cod_raza)}}" method="POST"  >
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                        </form>

                    </td>
                    @empty

                        <td>No hay informacion</td>



            @endforelse


            </tbody>
        </table>
</div>


    <th colspan="6">&nbsp;</th>


    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Vacunas por raza</h2>

            </div>


            <a href="{{route('vacunaporraza.create')}}"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
        </div>
        <th colspan="3">&nbsp;</th>

        <table class="table table-hover  ">

            <thead>
            <tr>

                <th width="20px">ID</th>
                <th width="20px">Raza </th>
                <th width="20px">Edad Minima</th>
                <th width="20px">Edad Maxima</th>
                <th width="20px">Dosis</th>
                <th colspan="3">&nbsp;</th>
            </tr>

            </thead>
            <tbody>


            @forelse( $vacunaporraza as $mascota )
                <tr>


                    <td>{{$mascota->cod_vacuna}}</td>
                    <td>{{$mascota->cod_raza}}</td>
                    <td>{{$mascota->edadmin}}</td>
                    <td>{{$mascota->edadmax}}</td>
                    <td>{{$mascota->dosis}}</td>
                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="{{route('vacunaporraza.edit',$mascota->cod_vacuna)}}"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="{{route('vacunaporraza.destroy',$mascota->cod_vacuna)}}" method="POST"  >
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














