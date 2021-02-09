<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('proveedor.store')); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Proveedor

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    RIF


                    <input type="text"   name="RIFProveedor" class="form-control" >

                </div>

                <div class="form-group" >
                    Nombre

                    <input type="text"   name="nombreProv" class="form-control" >

                </div>

                <div class="form-group" >
                    Direccion

                    <input type="text"    name="direccionProv" class="form-control">

                </div>

                <div class="form-group" >
                    Telefono Local

                    <input type="text"  name="TelefonoLocalProv" class="form-control">

                </div>

                <div class="form-group" >
                    Telefono Celular

                    <input type="text"    name="telefonoCelularProv" class="form-control">

                </div>

                <div class="form-group" >
                    Persona de Contacto

                    <input type="text"    name="personaContacto" class="form-control">

                </div>





                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>