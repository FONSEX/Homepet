<?php $__env->startSection('content'); ?>


    <?php


    foreach ($encargado as $variable) {
        $id=$variable->cod_encargado;
        $name= $variable->nombree;
        $direction=$variable->direccione;
        $phone=$variable->telefonoe;
        $salary=$variable->sueldoe;
        $time=$variable->tiempo_encargado;
    }

    ?>



    <form action="<?php echo e(route('encargado.update',$variable->cod_encargado)); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Encargado

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Nombre

                    <input type="text"  value="<?php echo e($name); ?>"  name="nombree" class="form-control" >

                </div>

                <div class="form-group" >
                    Direccion

                    <input type="text"  value="<?php echo e($direction); ?>"  name="direccione" class="form-control">

                </div>

                <div class="form-group" >
                    Telefono

                    <input type="text" value="<?php echo e($phone); ?>"  name="telefonoe" class="form-control">

                </div>

                <div class="form-group" >
                    Sueldo

                    <input type="text" value="<?php echo e($salary); ?>"   name="sueldoe" class="form-control">

                </div>

                <div class="form-group" >
                    Tiempo Encargado

                    <input type="date" value="<?php echo e($time); ?>"   name="tiempo_encargado" class="form-control">

                </div>





                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>















<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>