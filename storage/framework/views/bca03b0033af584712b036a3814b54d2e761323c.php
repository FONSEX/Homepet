<?php $__env->startSection('content'); ?>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">



    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Mascotas</h2>

            </div>


            <a href="<?php echo e(route('mascotas.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


          <?php $__empty_1 = true; $__currentLoopData = $mascotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mascota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>


                    <td><?php echo e($mascota->cod_mascota); ?></td>
                    <td><?php echo e($mascota->cod_raza); ?></td>
                    <td><?php echo e($mascota->nombrem); ?></td>
                    <td><?php echo e($mascota->edadm); ?></td>
                    <td><?php echo e($mascota->sexom); ?></td>
                    <td><?php echo e($mascota->pesom); ?></td>
                    <td><?php echo e($mascota->cod_vet); ?></td>
                    <td><?php echo e($mascota->cod_responsable); ?></td>
                    <td><?php echo e($mascota->fechan); ?></td>
                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="<?php echo e(route('mascotas.edit',$mascota->cod_mascota)); ?>"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="<?php echo e(route('mascotas.destroy',$mascota->cod_mascota)); ?>" method="POST"  >
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                        </form>

                    </td>
                </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

              <td>No hay informacion</td>



              <?php endif; ?>


          </tbody>
        </table>

    </div>
    <th colspan="6">&nbsp;</th>

    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Enfermedades sufridas por las mascotas</h2>

            </div>


            <a href="<?php echo e(route('enfermedades_sufridas_mascotas.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $enfermedades_sufridas_mascotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mascota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>


                    <td><?php echo e($mascota->nombreenf); ?></td>
                    <td><?php echo e($mascota->cod_mascota); ?></td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="<?php echo e(route('enfermedades_sufridas_mascotas.edit',$mascota->cod_mascota)); ?>"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="<?php echo e(route('enfermedades_sufridas_mascotas.destroy',$mascota->cod_mascota)); ?>" method="POST"  >
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <td>No hay informacion</td>



            <?php endif; ?>


            </tbody>
        </table>

    </div>













    <th colspan="6">&nbsp;</th>


    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Vacunas aplicadas a mascotas</h2>

            </div>


            <a href="<?php echo e(route('vacunas_aplicadas_mascotas.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $vacunas_aplicadas_mascotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mascota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>


                    <td><?php echo e($mascota->cod_vacuna); ?></td>
                    <td><?php echo e($mascota->cod_mascota); ?></td>
                    <td><?php echo e($mascota->fechaaplicacion); ?></td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="<?php echo e(route('vacunas_aplicadas_mascotas.edit',$mascota->cod_mascota)); ?>"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="<?php echo e(route('vacunas_aplicadas_mascotas.destroy',$mascota->cod_mascota)); ?>" method="POST"  >
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <td>No hay informacion</td>



            <?php endif; ?>


            </tbody>
        </table>

    </div>

    <th colspan="6">&nbsp;</th>

    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Relaciones de mascotas</h2>

            </div>


            <a href="<?php echo e(route('relacionesmascota.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $relacionesmascota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mascota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>

                    <td><?php echo e($mascota->cod_mascota); ?></td>
                    <td><?php echo e($mascota->cod_mascotarelacion); ?></td>
                    <td><?php echo e($mascota->parentesco); ?></td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="<?php echo e(route('relacionesmascota.edit',$mascota->cod_mascota)); ?>"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="<?php echo e(route('relacionesmascota.destroy',$mascota->cod_mascota)); ?>" method="POST"  >
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <td>No hay informacion</td>



            <?php endif; ?>


            </tbody>
        </table>

    </div>

    <th colspan="6">&nbsp;</th>




<div class="col-sm-8">
    <div class="row">
        <div class="col">
            <h2>Responsables</h2>

        </div>


        <a href="<?php echo e(route('responsable.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $responsable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>

                    <td><?php echo e($i->cod_responsable); ?></td>
                    <td><?php echo e($i->nombrer); ?></td>
                    <td><?php echo e($i->emailr); ?></td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="<?php echo e(route('responsable.edit',$i->cod_responsable)); ?>"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="<?php echo e(route('responsable.destroy',$i->cod_responsable)); ?>" method="POST"  >
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <td>No hay informacion</td>



            <?php endif; ?>


            </tbody>
        </table>
</div>
    <th colspan="6">&nbsp;</th>




    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Telefonos de Responsables</h2>

            </div>


            <a href="<?php echo e(route('telefonosresponsables.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $telefonosresponsables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mascota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>


                    <td><?php echo e($mascota->cod_responsable); ?></td>
                    <td><?php echo e($mascota->ntelefono); ?></td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="<?php echo e(route('telefonosresponsables.edit',$mascota->cod_responsable)); ?>"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="<?php echo e(route('telefonosresponsables.destroy',$mascota->cod_responsable)); ?>" method="POST"  >
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <td>No hay informacion</td>



            <?php endif; ?>


            </tbody>
        </table>

    </div>

    <th colspan="6">&nbsp;</th>





<div class="col-sm-8">


    <div class="row">
        <div class="col">
            <h2>Veterinarios</h2>

        </div>


        <a href="<?php echo e(route('veterinario.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $veterinario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>

                    <td><?php echo e($i->cod_vet); ?></td>
                    <td><?php echo e($i->nombrev); ?></td>
                    <td><?php echo e($i->telefonov); ?></td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="<?php echo e(route('veterinario.edit',$i->cod_vet)); ?>"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="<?php echo e(route('veterinario.destroy',$i->cod_vet)); ?>" method="POST"  >
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                        </form>

                    </td>
                </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <td>No hay informacion</td>



            <?php endif; ?>


            </tbody>
        </table>
</div>

    <th colspan="6">&nbsp;</th>



    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Vacunas</h2>

            </div>


            <a href="<?php echo e(route('vacuna.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $vacuna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mascota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>


                    <td><?php echo e($mascota->cod_vacuna); ?></td>
                    <td><?php echo e($mascota->montovacuna); ?></td>
                    <td><?php echo e($mascota->nombrevacuna); ?></td>
                    <td><?php echo e($mascota->descripcionvacuna); ?></td>
                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="<?php echo e(route('vacuna.edit',$mascota->cod_vacuna)); ?>"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="<?php echo e(route('vacuna.destroy',$mascota->cod_vacuna)); ?>" method="POST"  >
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <td>No hay informacion</td>



            <?php endif; ?>


            </tbody>
        </table>

    </div>

    <th colspan="6">&nbsp;</th>



<div class="col-sm-8">




    <div class="row">
        <div class="col">
            <h2>Razas</h2>

        </div>


        <a href="<?php echo e(route('raza.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $raza; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>

                    <td><?php echo e($i->cod_raza); ?></td>
                    <td><?php echo e($i->cod_animal); ?></td>
                    <td><?php echo e($i->nombrer); ?></td>
                    <td><?php echo e($i->descripcionr); ?></td>
                    <td><?php echo e($i->paisorigen); ?></td>
                    <td><?php echo e($i->nivel_inteligencia); ?></td>
                    <td><?php echo e($i->contextura_fuerte); ?></td>
                    <td><?php echo e($i->altura_min); ?></td>
                    <td><?php echo e($i->altura_max); ?></td>
                    <td><?php echo e($i->porcion_diaria); ?></td>
                    <td><?php echo e($i->talla); ?></td>
                    <td><?php echo e($i->color_pelaje); ?></td>
                    <td><?php echo e($i->cod_alimento); ?></td>

                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="<?php echo e(route('raza.edit',$i->cod_raza)); ?>"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="<?php echo e(route('raza.destroy',$i->cod_raza)); ?>" method="POST"  >
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                        </form>

                    </td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <td>No hay informacion</td>



            <?php endif; ?>


            </tbody>
        </table>
</div>


    <th colspan="6">&nbsp;</th>


    <div class="col-sm-8  ">
        <div class="row">
            <div class="col">
                <h2>Vacunas por raza</h2>

            </div>


            <a href="<?php echo e(route('vacunaporraza.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $vacunaporraza; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mascota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>


                    <td><?php echo e($mascota->cod_vacuna); ?></td>
                    <td><?php echo e($mascota->cod_raza); ?></td>
                    <td><?php echo e($mascota->edadmin); ?></td>
                    <td><?php echo e($mascota->edadmax); ?></td>
                    <td><?php echo e($mascota->dosis); ?></td>
                    <td> </td>
                    <td>

                        <a class="btn btn-warning" href="<?php echo e(route('vacunaporraza.edit',$mascota->cod_vacuna)); ?>"    >  <strong>editar</strong>  </a>

                    </td>
                    <td>

                        <form action="<?php echo e(route('vacunaporraza.destroy',$mascota->cod_vacuna)); ?>" method="POST"  >
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <td>No hay informacion</td>



            <?php endif; ?>


            </tbody>
        </table>

    </div>

    <th colspan="6">&nbsp;</th>


<?php $__env->stopSection(); ?>















<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>