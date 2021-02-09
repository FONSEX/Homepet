<?php $__env->startSection('content'); ?>


    <?php
use App\personal;

$personal=personal::All();
    foreach ($servicio as $variable) {
        $id=$variable->cod_servicio;
        $name= $variable->nombres;
        $available=$variable->disponibilidad;
        $description=$variable->descripcions;
        $persona=$variable->cod_personal;


    }

    ?>



    <form action="<?php echo e(route('servicio.update',$id)); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Servicio

            </h2>

            <table class="table table-hover table-striped">



                <div class="form-group" >
                    Nombre


                    <select name="nombres"   class="form-control" >

                        <option value="<?php echo e($name); ?>">
                            Deje esta casilla asi para no modificar el valor
                        </option>
                        <option value="Peluqueria">Peluqueria</option>
                        <option value="Spa">Spa</option>
                        <option value="Pernocta">Pernocta</option>
                        <option value="Veterinario">Veterinario</option>


                    </select>



                </div>

                <div class="form-group" >
                    Disponibilidad

                    <input type="text" value="<?php echo e($available); ?>"  name="disponibilidad" class="form-control">

                </div>

                <div class="form-group" >
                    Descripcion

                    <textarea type="text"   name="descripcions" class="form-control"> <?php echo e($description); ?></textarea>

                </div>


                <div class="form-group" >
                    Personal Encargado

                    <select name="cod_personal" class="form-control">

                        <option value="<?php echo e($persona); ?>">
                            Deje esta casilla asi para no modificar el valor
                        </option>

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