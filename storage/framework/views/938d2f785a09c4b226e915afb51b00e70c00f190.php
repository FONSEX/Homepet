<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="col-sm-8">
        <div class="row">
            <div class="col">
                <h2>Listado de Servicios</h2>

            </div>


            <a href="<?php echo e(route('servicio.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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
            <?php $__empty_1 = true; $__currentLoopData = $servicio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->cod_servicio); ?></td>
                <td><?php echo e($i ->nombres); ?></td>
                <td><?php echo e($i ->disponibilidad); ?></td>
                <td><?php echo e($i ->descripcions); ?></td>
                <td><?php echo e($i ->cod_personal); ?></td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('servicio.edit',$i->cod_servicio)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('servicio.destroy',$i->cod_servicio)); ?>" method="POST"  >
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                    </form>

                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <td>No hay informacion</td>


            <?php endif; ?>
        </table>


    </div>

    <th colspan="6">&nbsp;</th>



    <div class="col-sm-8">
        <div class="row">
            <div class="col">
                <h2>Actividades </h2>

            </div>


            <a href="<?php echo e(route('actividad.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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
            <?php $__empty_1 = true; $__currentLoopData = $actividad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->num_act); ?></td>
                <td><?php echo e($i ->cod_servicio); ?></td>
                <td><?php echo e($i ->descripcionact); ?></td>
                <td><?php echo e($i ->capacidad_atencion); ?></td>


                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('actividad.edit')); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('actividad.destroy',$i->cod_servicio)); ?>" method="POST"  >
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                    </form>

                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <td>No hay informacion</td>


            <?php endif; ?>
        </table>


    </div>

    <th colspan="6">&nbsp;</th>


    <div class="col-sm-8">
        <div class="row">
            <div class="col">
                <h2>Orden de usos</h2>

            </div>


            <a href="<?php echo e(route('Ordendeuso.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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
            <?php $__empty_1 = true; $__currentLoopData = $ordendeuso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->cod_orden); ?></td>
                <td><?php echo e($i ->cod_producto); ?></td>
                <td><?php echo e($i ->fecha_uso); ?></td>
                <td><?php echo e($i ->cod_personal); ?></td>
                <td><?php echo e($i ->cod_servicio); ?></td>
                <td><?php echo e($i ->cant_producto); ?></td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('Ordendeuso.edit',$i->cod_servicio)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('Ordendeuso.destroy',$i->cod_servicio)); ?>" method="POST"  >
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                    </form>

                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <td>No hay informacion</td>


            <?php endif; ?>
        </table>


    </div>

    <th colspan="6">&nbsp;</th>


    <div class="col-sm-8">
        <div class="row">
            <div class="col">
                <h2>Inventario</h2>

            </div>


            <a href="<?php echo e(route('inventario.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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
            <?php $__empty_1 = true; $__currentLoopData = $inventario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->cod_ajuste); ?></td>
                <td><?php echo e($i ->fecha_ajuste); ?></td>
                <td><?php echo e($i ->cod_producto); ?></td>
                <td><?php echo e($i ->cantidadinv); ?></td>
                <td><?php echo e($i ->tipoajuste); ?></td>


                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('inventario.edit',$i->cod_servicio)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('inventario.destroy',$i->cod_servicio)); ?>" method="POST"  >
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                    </form>

                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <td>No hay informacion</td>


            <?php endif; ?>
        </table>


    </div>

    <th colspan="6">&nbsp;</th>



<?php $__env->stopSection(); ?>















<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>