<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('relacionesmascota.store')); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Relaciones Mascota

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    Parentesco                          

                    <input type="text"   name="parentesco" class="form-control" >

                </div>

                <div class="form-group" >
                    ID Mascota

                    <input type="text"   name="cod_mascota" class="form-control" >

                </div>

                <div class="form-group" >
                    ID MascotaRelacion

                    <input type="text"    name="cod_mascotaRelacion" class="form-control">

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>