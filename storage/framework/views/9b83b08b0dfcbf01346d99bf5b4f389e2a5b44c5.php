<?php $__env->startSection('content'); ?>


 <!DOCTYPE html>
<html lang="es">



    <section id="bienvenidos">

        <h3>Que desea hacer ?  </h3>




    </section >



    <section id="opciones">


        <div class="contenedor">

            <article>

                <a class="icon-building" href="<?php echo e(route('franquicia.index')); ?>"  >Gestion de la franquicia </a>

            </article>


            <article>

                <a class="icon-adult"  href="<?php echo e(route('personal.index')); ?>"     >Gestion del Personal</a>

            </article>

            <article>

                <a class= "icon-scissors"  href="<?php echo e(route('servicio.index')); ?>"   >Servicios de la Franquicia</a>

            </article>

            <article>

                    <a class= "icon-clipboard" href="<?php echo e(route('mascotas.index')); ?>" >Gestion de Mascotas</a>

            </article>

            <article>



                <a class= "icon-credit-card"  href="<?php echo e(route('facturaservicio.index')); ?>" >Pagos y Facturas </a>

            </article>



        </div>

    </section >



    </section 2>

    <section id="opciones">


        <div class="contenedor">


            <article>

                <a class= "icon-ticket"  href="<?php echo e(route('reserva.index')); ?>" >Reservas de Clientes </a>

            </article>




            <article>

                <a class= "icon-industrial-building" href="<?php echo e(route('alimento.index')); ?>" >Articulos y Proveedores </a>

            </article>


        </div>

</main>


</body>
</html>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>