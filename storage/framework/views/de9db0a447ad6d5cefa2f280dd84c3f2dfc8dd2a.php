<?php $__env->startSection('content'); ?>


    <?php


    foreach ($mascotas as $variable) {
        $id=$variable->cod_mascota;
        $idR=$variable->cod_raza;
        $name= $variable->nombrem;
        $age=$variable->edadm;
        $sex=$variable->sexom;
        $height=$variable->pesom;
        $idV=$variable->cod_vet;
        $idResponsable=$variable->cod_responsable;
        $fechan=$variable->fechan;





    }

    ?>



    <form action="<?php echo e(route('mascotas.update',$id)); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Mascota

            </h2>

            <table class="table table-hover table-striped">

                <table class="table table-hover table-striped">

                    <div class="form-group" >
                        ID

                        <input type="text" value="<?php echo e($id); ?>"  name="cod_mascota" class="form-control" >

                    </div>

                    <div class="form-group" >
                        ID de la raza

                        <input type="text"  value="<?php echo e($idR); ?>" name="cod_raza" class="form-control" >

                    </div>

                    <div class="form-group" >
                        Nombre

                        <input type="text" value="<?php echo e($name); ?>"   name="nombrem" class="form-control">

                    </div>

                    <div class="form-group" >
                        Edad

                        <input type="text" value="<?php echo e($age); ?>" name="edadm" class="form-control">

                    </div>

                    <div class="form-group" >
                        Sexo

                        <input type="text" value="<?php echo e($sex); ?>"   name="sexom" class="form-control">

                    </div>


                    <div class="form-group" >
                        Peso

                        <input type="text"  value="<?php echo e($height); ?>"  name="pesom" class="form-control">

                    </div>

                    <div class="form-group" >
                        ID del Veterinario

                        <input type="text" value="<?php echo e($idV); ?>"   name="cod_vet" class="form-control">

                    </div>

                    <div class="form-group" >
                        Fecha de Nacimiendo

                        <input type="date"  value="<?php echo e($fechan); ?>"  name="fechan" class="form-control">

                    </div>

                    <div class="form-group" >
                        ID del Responsable

                        <input type="text" value="<?php echo e($idResponsable); ?>"   name="cod_responsable" class="form-control">

                    </div>






                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>