<?php $__env->startSection('content'); ?>


    <?php

    use App\animal;
    use App\alimento;

    $animal=animal::All();
    $alimento=alimento::All();



    foreach ($raza as $variable) {
        $id= $variable->cod_raza;
        $idA= $variable->cod_animal;
        $name= $variable->nombrer;
        $description= $variable->descripcionr;
        $country= $variable->paisorigen;
        $inteligency= $variable->nivel_inteligencia;
        $contexture= $variable->contextura_fuerte;
        $heightMin= $variable->altura_min;
        $heightMax= $variable->altura_max;
        $DiaryPortion= $variable->porcion_diaria;
        $size= $variable->talla;
        $color= $variable->color_pelaje;
        $idAlim= $variable->cod_alimento;
    }

    ?>



    <form action="<?php echo e(route('raza.update',$variable->cod_raza)); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Editar: Raza

            </h2>



            <table class="table table-hover table-striped">


                <div class="form-group" >
                    ID

                    <input type="text"  value="<?php echo e($id); ?>"  name="cod_raza" class="form-control" >

                </div>



                <div class="form-group" >
                    Tipo de Animal


                    <select name="cod_animal" class="form-control" >

                        <option value="<?php echo e($idA); ?>">
                            Deje esta casilla asi para no modificar el valor
                        </option>


                        <?php $__currentLoopData = $animal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($variable->cod_animal); ?>"><?php echo e($variable->nombrea); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>



                </div>

                <div class="form-group" >
                    Nombre

                    <input type="text"  value="<?php echo e($name); ?>"  name="nombrer" class="form-control">

                </div>

                <div class="form-group" >
                    Descripcion

                    <input type="text" value="<?php echo e($description); ?>"  name="descripcionr" class="form-control">

                </div>

                <div class="form-group" >
                    Pais de Origen

                    <input type="text" value="<?php echo e($country); ?>"   name="paisorigen" class="form-control">

                </div>

                <div class="form-group" >
                    Nivel de Inteligencia



                    <select name="nivel_inteligencia" class="form-control" >

                        <option value="<?php echo e($inteligency); ?>">
                            Deje esta casilla asi para no modificar el valor
                        </option>

                        <option value="Bajo">Bajo</option>
                        <option value="Medio">Medio</option>
                        <option value="Alto">Alto</option>



                    </select>



                </div>


                <div class="form-group" >
                    Contextura


                    <select name="contextura_fuerte"class="form-control" >


                        <option value="<?php echo e($contexture); ?>">
                            Deje esta casilla asi para no modificar el valor
                        </option>

                        <option value="N">N</option>
                        <option value="S">S</option>



                    </select>




                </div>


                <div class="form-group" >
                    Altura Min

                    <input type="text" value="<?php echo e($heightMin); ?>"   name="altura_min" class="form-control">

                </div>


                <div class="form-group" >
                    Altura Max

                    <input type="text" value="<?php echo e($heightMax); ?>"   name="altura_max" class="form-control">

                </div>


                <div class="form-group" >
                    Porcion Diaria

                    <input type="text" value="<?php echo e($DiaryPortion); ?>"   name="porcion_diaria" class="form-control">

                </div>


                <div class="form-group" >
                    Talla



                    <select name="talla" class="form-control" >


                        <option value="<?php echo e($size); ?>">
                            Deje esta casilla asi para no modificar el valor
                        </option>


                        <option value="P">P</option>
                        <option value="M">M</option>
                        <option value="G">G</option>



                    </select>



                </div>


                <div class="form-group" >
                    Color  del Pelaje

                    <input type="text" value="<?php echo e($color); ?>"   name="color_pelaje" class="form-control">

                </div>


                <div class="form-group" >
                   Alimento


                    <select name="cod_alimento" class="form-control" >

                        <option value="<?php echo e($idAlim); ?>">
                            Deje esta casilla asi para no modificar el valor
                        </option>

                        <?php $__currentLoopData = $alimento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($variable->cod_alimento); ?>"><?php echo e($variable->nombrealimento); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>




                </div>






                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>















<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>