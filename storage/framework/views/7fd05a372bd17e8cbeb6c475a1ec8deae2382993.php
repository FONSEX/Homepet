<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="col-sm-8">

        <div class="row">
            <div class="col">
                <h2>Reservas</h2>

            </div>


            <a href="<?php echo e(route('reserva.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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
            <?php $__empty_1 = true; $__currentLoopData = $reserva; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->num_reserva); ?></td>
                <td><?php echo e($i ->fecha_reservacion); ?></td>
                <td><?php echo e($i ->monto_abonado); ?></td>
                <td><?php echo e($i ->fecha_act); ?></td>
                <td><?php echo e($i ->cod_servicio); ?></td>


                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('reserva.edit',$i->num_reserva)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('reserva.destroy',$i->num_reserva)); ?>" method="POST"  >
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
                <h2>Fichas de Registro</h2>

            </div>


            <a href="<?php echo e(route('ficharegistro.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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
            <?php $__empty_1 = true; $__currentLoopData = $ficharegistro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->cod_ficha); ?></td>
                <td><?php echo e($i ->cod_mascota); ?></td>
                <td><?php echo e($i ->cod_servicio); ?></td>
                <td><?php echo e($i ->autorizado); ?></td>
                <td><?php echo e($i ->fechaent); ?></td>
                <td><?php echo e($i ->horaent); ?></td>
                <td><?php echo e($i ->horase); ?></td>
                <td><?php echo e($i ->fechasr); ?></td>
                <td><?php echo e($i ->horasr); ?></td>
                <td><?php echo e($i ->fechase); ?></td>


                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('ficharegistro.edit',$i->cod_ficha)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('ficharegistro.destroy',$i->cod_ficha)); ?>" method="POST"  >
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