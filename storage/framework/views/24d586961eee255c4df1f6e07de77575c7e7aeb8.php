<?php $__env->startSection('content'); ?>


    <?php


    foreach ($personal as $variable) {
        $id=$variable->cod_personal;
        $name= $variable->nombrep;
        $direction=$variable->direccionp;
        $phone=$variable->telefonop;
        $salary=$variable->sueldop;


    }

    ?>



    <form action="<?php echo e(route('personal.update',$id)); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Personal

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Nombre

                    <input type="text"  value="<?php echo e($name); ?>"  name="nombrep" class="form-control">

                </div>

                <div class="form-group" >
                    Direccion

                    <input type="text" value="<?php echo e($direction); ?>"  name="direccionp" class="form-control">

                </div>

                <div class="form-group" >
                    Telefono

                    <input type="text" value="<?php echo e($phone); ?>"   name="telefonop" class="form-control">

                </div>


                <div class="form-group" >
                    Sueldo

                    <input type="text" value="<?php echo e($salary); ?>"   name="sueldop" class="form-control">

                </div>




                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>