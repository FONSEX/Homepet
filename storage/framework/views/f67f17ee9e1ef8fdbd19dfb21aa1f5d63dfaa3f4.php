<?php $__env->startSection('content'); ?>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="col-sm-8">

        <div class="row">
            <div class="col">
                <h2>Ordenes de compra </h2>

            </div>


            <a href="<?php echo e(route('ordencompra.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $ordencompra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->cod_compra); ?></td>
                <td><?php echo e($i ->fechacomp); ?></td>
                <td><?php echo e($i ->rif); ?></td>



                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('ordencompra.edit',$i ->cod_compra)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('ordencompra.destroy',$i ->cod_compra)); ?>" method="POST"  >
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
                <h2>Productos de las  Ordenes de compra </h2>

            </div>


            <a href="<?php echo e(route('productos_orden_compra.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $productos_orden_compra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->cod_compra); ?></td>
                <td><?php echo e($i ->cod_producto); ?></td>
                <td><?php echo e($i ->cantidad); ?></td>



                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('productos_orden_compra.edit',$i ->cod_compra)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('productos_orden_compra.destroy',$i ->cod_compra)); ?>" method="POST"  >
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
                <h2>Alimentos</h2>

            </div>


            <a href="<?php echo e(route('alimento.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $alimento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->cod_alimento); ?></td>
                <td><?php echo e($i ->nombrealimento); ?></td>
                <td><?php echo e($i ->costoalimento); ?></td>
                <td><?php echo e($i ->descripcionalimento); ?></td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('alimento.edit',$i ->cod_alimento)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('alimento.destroy',$i ->cod_alimento)); ?>" method="POST"  >
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
                <h2>Proveedores</h2>

            </div>


            <a href="<?php echo e(route('proveedor.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $proveedor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->rifproveedor); ?></td>
                <td><?php echo e($i ->nombreprov); ?></td>
                <td><?php echo e($i ->direccionprov); ?></td>
                <td><?php echo e($i ->telefonolocalprov); ?></td>
                <td><?php echo e($i ->telefonocelularprov); ?></td>
                <td><?php echo e($i ->personacontacto); ?></td>

                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('proveedor.edit',$i ->rifproveedor)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('proveedor.destroy',$i ->rifproveedor)); ?>" method="POST"  >
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
                <h2>Productos</h2>

            </div>


            <a href="<?php echo e(route('producto.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->cod_producto); ?></td>
                <td><?php echo e($i ->nombrep); ?></td>
                <td><?php echo e($i ->descripcionp); ?></td>
                <td><?php echo e($i ->costop); ?></td>



                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('producto.edit',$i ->cod_producto)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('producto.destroy',$i ->cod_producto)); ?>" method="POST"  >
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
                <h2>Productos distribuidos por los proveedores</h2>

            </div>


            <a href="<?php echo e(route('productos_distribuidos_proveedor.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $productos_distribuidos_proveedor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->rifproveedor); ?></td>
                <td><?php echo e($i ->cod_producto); ?></td>



                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('productos_distribuidos_proveedor.edit',$i ->rifproveedor)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('productos_distribuidos_proveedor.destroy',$i ->rifproveedor)); ?>" method="POST"  >
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
                <h2>Facturas de los Productos de los proveedores</h2>

            </div>


            <a href="<?php echo e(route('productos_factura_proveedor.create')); ?>"   class=" btn btn-primary "><strong>Nuevo </strong> </a>
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


            <?php $__empty_1 = true; $__currentLoopData = $productos_factura_proveedor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                <td><?php echo e($i ->rifproveedor); ?></td>
                <td><?php echo e($i ->cod_producto); ?></td>
                <td><?php echo e($i ->cantidad); ?></td>
                <td><?php echo e($i ->precio); ?></td>


                <td> </td>
                <td>

                    <a class="btn btn-warning" href="<?php echo e(route('productos_factura_proveedor.edit',$i ->rifproveedor)); ?>"    >  <strong>editar</strong>  </a>

                </td>
                <td>

                    <form action="<?php echo e(route('productos_factura_proveedor.destroy',$i ->rifproveedor)); ?>" method="POST"  >
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