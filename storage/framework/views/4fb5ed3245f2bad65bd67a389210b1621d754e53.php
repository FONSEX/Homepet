<?php $__env->startSection('content'); ?>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="col-sm-8">

        <div class="row">
<div class="col">
    <h2>Facturas de los servicios</h2>

</div>


            <a href="<?php echo e(route('facturaservicio.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $facturaservicio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->cod_fact); ?></td>
                <td><?php echo e($i ->cod_personal); ?></td>
                <td><?php echo e($i ->fecha_fact); ?></td>
                <td><?php echo e($i ->monto_fact); ?></td>
                <td><?php echo e($i ->cod_modalidad); ?></td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('facturaservicio.edit',$i->rif)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('facturaservicio.destroy',$i->rif)); ?>" method="POST"  >
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
                <h2>Facturas de la tienda </h2>

            </div>


            <a href="<?php echo e(route('facturatienda.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $facturatienda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->numfact); ?></td>
                <td><?php echo e($i ->fecha); ?></td>
                <td><?php echo e($i ->cod_responsable); ?></td>
                <td><?php echo e($i ->cod_modalidad); ?></td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('facturatienda.edit',$i->numfact)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('facturatienda.destroy',$i->numfact)); ?>" method="POST"  >
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
                <h2>Facturas del proveedor  </h2>

            </div>


            <a href="<?php echo e(route('facturaproveedor.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $facturaproveedor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->n_fact); ?></td>
                <td><?php echo e($i ->fecha_factp); ?></td>
                <td><?php echo e($i ->monto_totalp); ?></td>
                <td><?php echo e($i ->rif); ?></td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('facturaproveedor.edit',$i->rif)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('facturaproveedor.destroy',$i->rif)); ?>" method="POST"  >
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
                <h2>Facturas de productos de la tienda  </h2>

            </div>


            <a href="<?php echo e(route('productos_factura_tienda.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $productos_factura_tienda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->cod_producto); ?></td>
                <td><?php echo e($i ->num_fact); ?></td>
                <td><?php echo e($i ->cantidad); ?></td>
                <td><?php echo e($i ->precio); ?></td>
                <td><?php echo e($i ->descuento); ?></td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('productos_factura_tienda.edit',$i->rif)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('productos_factura_tienda.destroy',$i->rif)); ?>" method="POST"  >
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