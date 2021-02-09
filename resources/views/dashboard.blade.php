@extends('layouts.app')

@section ('content')


 <!DOCTYPE html>
<html lang="es">



    <section id="bienvenidos">

        <h3>Que desea hacer ?  </h3>




    </section >



    <section id="opciones">


        <div class="contenedor">

            <article>

                <a class="icon-building" href="{{ route('franquicia.index')}}"  >Gestion de la franquicia </a>

            </article>


            <article>

                <a class="icon-adult"  href="{{ route('personal.index')}}"     >Gestion del Personal</a>

            </article>

            <article>

                <a class= "icon-scissors"  href="{{ route('servicio.index')}}"   >Servicios de la Franquicia</a>

            </article>

            <article>

                    <a class= "icon-clipboard" href="{{ route('mascotas.index')}}" >Gestion de Mascotas</a>

            </article>

            <article>



                <a class= "icon-credit-card"  href="{{ route('facturaservicio.index')}}" >Pagos y Facturas </a>

            </article>



        </div>

    </section >



    </section 2>

    <section id="opciones">


        <div class="contenedor">


            <article>

                <a class= "icon-ticket"  href="{{ route('reserva.index')}}" >Reservas de Clientes </a>

            </article>




            <article>

                <a class= "icon-industrial-building" href="{{ route('alimento.index')}}" >Articulos y Proveedores </a>

            </article>


        </div>

</main>


</body>
</html>



@endsection

