<?php $__env->startSection('content'); ?>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="col-sm-8">

        <div class="row">
<div class="col">
    <h2>Franquicia</h2>

</div>


            <a href="<?php echo e(route('franquicia.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $franquicia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->rif); ?></td>
                <td><?php echo e($i ->ciudad); ?></td>
                <td><?php echo e($i ->capacidad); ?></td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('franquicia.edit',$i->rif)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('franquicia.destroy',$i->rif)); ?>" method="POST"  >
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
                <h2>Encargado</h2>

            </div>


            <a href="<?php echo e(route('encargado.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>


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


          <?php $__empty_1 = true; $__currentLoopData = $encargados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $encargado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                  <td><?php echo e($encargado ->cod_encargado); ?></td>
                  <td><?php echo e($encargado ->nombree); ?></td>
                  <td><?php echo e($encargado ->direccione); ?></td>
                  <td><?php echo e($encargado ->telefonoe); ?></td>
                  <td><?php echo e($encargado ->sueldoe); ?></td>
                  <td> </td>
              <td>

                      <a class="btn btn-warning" href="<?php echo e(route('encargado.edit',$encargado->cod_encargado)); ?>"    >  <strong>editar</strong>  </a>

              </td>
                  <td>

                  <form action="<?php echo e(route('encargado.destroy',$encargado->cod_encargado)); ?>" method="POST"  >
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
                <h2>Animales Especializados</h2>

            </div>


            <a href="<?php echo e(route('animal.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>


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


            <?php $__empty_1 = true; $__currentLoopData = $animal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->cod_animal); ?></td>
                <td><?php echo e($i ->nombrea); ?></td>
                <td><?php echo e($i ->descripciona); ?></td>

                <td> </td>
                <td>

                    <div class="col">

                    <a class="btn btn-warning" href="<?php echo e(route('animal.edit',$i ->cod_animal)); ?>"    >  <strong>editar</strong>  </a>

                </div>
                <td>
                    <div class="col">


                    <form action="<?php echo e(route('animal.destroy',$i ->cod_animal)); ?>" method="POST"  >
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger " >  <strong>borrar</strong>  </button>
                    </form>
                    </div>

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