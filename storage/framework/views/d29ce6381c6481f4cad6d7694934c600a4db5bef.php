<?php $__env->startSection('content'); ?>


    <?php


    foreach ($responsable as $variable) {
        $id=$variable->cod_responsable;
        $name= $variable->nombrer;
        $email=$variable->emailr;

    }

    ?>



    <form action="<?php echo e(route('responsable.update',$id)); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Responsable

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Nombre

                    <input type="text"  value="<?php echo e($name); ?>"  name="nombrer" class="form-control">

                </div>

                <div class="form-group" >
                    Email

                    <input type="text" value="<?php echo e($email); ?>"  name="emailr" class="form-control">

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>