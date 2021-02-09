<?php $__env->startSection('content'); ?>


    <?php


    foreach ($OrdenDeUSo as $variable) {


        $id=$variable->cod_orden;
        $productid= $variable->cod_producto;
        $usedate=$variable->fecha_uso;
        $personalid=$variable->cod_personal;
        $serviceid=$variable->cod_servicio;
        $productq=$variable->cant_producto;


    }

    ?>



    <form action="<?php echo e(route('Ordendeuso.update',$id)); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Orden de Uso

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    ID

                    <input type="text"  value="<?php echo e($id); ?>"  name="cod_orden" class="form-control">

                </div>

                <div class="form-group" >
                    ID Producto

                    <input type="text" value="<?php echo e($productid); ?>"  name="cod_producto" class="form-control">

                </div>

                <div class="form-group" >
                    Fecha de Uso

                    <input type="text" value="<?php echo e($usedate); ?>"   name="fecha_uso" class="form-control">

                </div>


                <div class="form-group" >
                    ID Personal

                    <input type="text" value="<?php echo e($personalid); ?>"   name="cod_personal" class="form-control">

                </div>

                <div class="form-group" >
                    ID Servicio

                    <input type="text" value="<?php echo e($serviceid); ?>"   name="cod_servicio" class="form-control">

                </div>

                <div class="form-group" >
                    Cantidad de Producto

                    <input type="text" value="<?php echo e($productq); ?>"   name="cant_producto" class="form-control">

                </div>




                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>