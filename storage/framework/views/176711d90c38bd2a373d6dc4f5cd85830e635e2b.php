<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="col-sm-8">

        <div class="row">
            <div class="col">
                <h2>Listado del Personal</h2>

            </div>


            <a href="<?php echo e(route('personal.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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
            <?php $__empty_1 = true; $__currentLoopData = $personal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->cod_personal); ?></td>
                <td><?php echo e($i ->nombrep); ?></td>
                <td><?php echo e($i ->direccionp); ?></td>
                <td><?php echo e($i ->telefonop); ?></td>
                <td><?php echo e($i ->sueldop); ?></td>


                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('personal.edit',$i->cod_personal)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('personal.destroy',$i->cod_personal)); ?>" method="POST"  >
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