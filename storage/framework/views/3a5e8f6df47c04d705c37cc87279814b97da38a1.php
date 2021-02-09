<?php $__env->startSection('content'); ?>

    <?php

use App\animal;
use App\encargado;

$animal=animal::All();
$encargado=encargado::All();

    ?>





    <form action="<?php echo e(route('franquicia.store')); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nueva: Franquicia

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    RIF

                    <input type="text"   name="rif" class="form-control" >

                </div>

                <div class="form-group" >
                    Ciudad

                    <input type="text"   name="ciudad" class="form-control" >

                </div>

                <div class="form-group" >
                    Especializacion

                    <select name="especializacion" class="form-control">


                        <?php $__currentLoopData = $animal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($variable->cod_animal); ?>"><?php echo e($variable->nombrea); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </select>

                </div>

                <div class="form-group" >
                    Capacidad

                    <input type="text"  name="capacidad" class="form-control">

                </div>

                <div class="form-group" >
                    Encargado

                    <select name="cod_encargado" class="form-control">

                        <?php $__currentLoopData = $encargado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($variable->cod_encargado); ?>"><?php echo e($variable->nombree); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </select>



                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>