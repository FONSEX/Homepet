<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('telefonosresponsables.store')); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Telefonos Responsables

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    ID Responsable                        


                   
                    <input type="text"   name="cod_responsable" class="form-control" >

                </div>

                <div class="form-group" >
                    Numero Telefono

                    <input type="text"   name="Ntelefono" class="form-control" >

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>