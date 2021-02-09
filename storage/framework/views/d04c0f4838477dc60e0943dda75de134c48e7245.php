<?php $__env->startSection('content'); ?>


    <?php


    foreach ($Producto as $variable) {
        $id=$variable->cod_producto;

        $description= $variable->descripcionp;
        $cost=$variable->costop;
        $name=$variable->nombrep;

    }

    ?>



    <form action="<?php echo e(route('producto.update',$id )); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Producto

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    ID

                    <input type="text"  value="<?php echo e($id); ?>"  name="cod_producto" class="form-control">

                </div>

                <div class="form-group" >
                    Descripción

                    <input type="text" value="<?php echo e($description); ?>"  name="descripcionP" class="form-control">

                </div>

                <div class="form-group" >
                    Costo

                    <input type="text" value="<?php echo e($cost); ?>"   name="costoP" class="form-control">

                </div>


                <div class="form-group" >
                    Nombre

                    <input type="text" value="<?php echo e($name); ?>"   name="nombreP" class="form-control">

                </div>




                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>