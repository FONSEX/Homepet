<?php $__env->startSection('content'); ?>


    <?php

    use App\personal;

    $personal=personal::All();

    ?>




    <form action="<?php echo e(route('servicio.store')); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Servicio

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    ID

                    <input type="text"   name="cod_servicio" class="form-control" >

                </div>

                <div class="form-group" >
                    Nombre


                    <select name="nombres" class="form-control" >

                        <option value="Peluqueria">Peluqueria</option>
                        <option value="Spa">Spa</option>
                        <option value="Pernocta">Pernocta</option>
                        <option value="Veterinario">Veterinario</option>


                    </select>

                </div>

                <div class="form-group" >
                    Disponibilidad

                    <input type="text"    name="disponibilidad" class="form-control">

                </div>

                <div class="form-group" >
                    Descripcion

                    <textarea  name="descripcions" class="form-control"></textarea>

                </div>


                <div class="form-group" >
                    ID del Personal encargado

                    <select name="cod_personal" class="form-control">


                        <?php $__currentLoopData = $personal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($variable->cod_personal); ?>"><?php echo e($variable->nombrep); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </select>


                </div>




                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>