<?php $__env->startSection('content'); ?>


    <?php

    use App\raza;
    use App\responsable;
    use App\veterinario;

    $raza=raza::All();
    $responsable=responsable::All();
    $veterinario=veterinario::All();

    ?>

    <form action="<?php echo e(route('mascotas.store')); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nueva: Mascota

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    ID

                    <input type="text"   name="cod_mascota" class="form-control" >

                </div>

                <div class="form-group" >
                    Raza

                    <select name="cod_raza" class="form-control" >


                    <?php $__currentLoopData = $raza; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($variable->cod_raza); ?>"><?php echo e($variable->nombrer); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>


                </div>

                <div class="form-group" >
                    Nombre

                    <input type="text"    name="nombrem" class="form-control">

                </div>

                <div class="form-group" >
                    Edad

                    <input type="text"  name="edadm" class="form-control">

                </div>

                <div class="form-group" >
                    Sexo

                    <select name="sexom" class="form-control" >

                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>



                    </select>

                </div>


                <div class="form-group" >
                    Peso

                    <input type="text"    name="pesom" class="form-control">

                </div>

                <div class="form-group" >
                    Veterinario


                    <select name="cod_vet" class="form-control" >


                        <?php $__currentLoopData = $veterinario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($variable->cod_vet); ?>"><?php echo e($variable->nombrev); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>




                </div>

                <div class="form-group" >
                    Fecha de Nacimiendo

                    <input type="date"    name="fechan" class="form-control">

                </div>

                <div class="form-group" >
                    Responsable

                    <select name="cod_responsable" class="form-control" >


                        <?php $__currentLoopData = $responsable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($variable->cod_responsable); ?>"><?php echo e($variable->nombrer); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>


                </div>






                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>