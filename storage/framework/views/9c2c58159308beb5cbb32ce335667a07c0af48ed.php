<?php $__env->startSection('content'); ?>


    <?php


    foreach ($veterinario as $variable) {
        $id=$variable->cod_vet;
        $name= $variable->nombrev;
        $phone=$variable->telefonov;

    }

    ?>



    <form action="<?php echo e(route('veterinario.update',$id)); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Veterinario

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Nombre

                    <input type="text"  value="<?php echo e($name); ?>"  name="nombrev" class="form-control">

                </div>

                <div class="form-group" >
                    Telefono

                    <input type="text" value="<?php echo e($phone); ?>"  name="telefonov" class="form-control">

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>