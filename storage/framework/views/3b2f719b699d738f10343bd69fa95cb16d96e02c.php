<?php $__env->startSection('content'); ?>


    <?php

    use App\animal;
    use App\encargado;

    $animal=animal::All();
    $encargado=encargado::All();




    foreach ($franquicia as $variable) {
        $id=$variable->rif;
        $city= $variable->ciudad;
        $special=$variable->especializacion;
        $capacity=$variable->capacidad;

    }

    ?>



    <form action="<?php echo e(route('franquicia.update',$id)); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Franquicia

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Ciudad

                    <input type="text"  value="<?php echo e($city); ?>"  name="ciudad" class="form-control">

                </div>

                <div class="form-group" >
                    Especializacion

                    <select name="especializacion"  class="form-control">

                        <option value="<?php echo e($special); ?>">
                            Deje esta casilla asi para no modificar el valor
                        </option>
                        <?php $__currentLoopData = $animal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($variable->cod_animal); ?>"><?php echo e($variable->nombrea); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </select>

                </div>

                <div class="form-group" >
                    Capacidad

                    <input type="text" value="<?php echo e($capacity); ?>"   name="capacidad" class="form-control">

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>