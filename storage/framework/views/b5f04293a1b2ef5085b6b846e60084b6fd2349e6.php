<?php $__env->startSection('content'); ?>


    <?php


    foreach ($actividad as $variable) {
        $numact=$variable->Num_act;
        $servicecode= $variable->cod_servicio;
        $description=$variable->Descripcionact;
        $capacity=$variable->Capacidad_Atencion;
    }

    ?>



    <form action="<?php echo e(route('actividad.update',$servicecode)); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Actividad

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Numero Actividad

                    <input type="text"  value="<?php echo e($numact); ?>"  name="Num_act" class="form-control">

                </div>

                <div class="form-group" >
                    Codigo Servicio

                    <input type="text" value="<?php echo e($servicecode); ?>"  name="cod_servicio" class="form-control">

                </div>

                <div class="form-group" >
                    Descripción

                    <input type="text" value="<?php echo e($description); ?>"   name="Descripcionact" class="form-control">

                </div>


                <div class="form-group" >
                    Capacidad de Atención

                    <input type="text" value="<?php echo e($capacity); ?>"   name="Capacidad_Atencion" class="form-control">

                </div>

                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>