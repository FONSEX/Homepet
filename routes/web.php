<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Auth\LoginController@showLoginForm')->middleware('guest');




/* Rutas de las tablas del proyecto */


Route::resource('mascotas','MascotaController');
Route::resource('franquicia','FranquiciaController');
Route::resource('personal','PersonalController');
Route::resource('encargado','EncargadoController');
Route::resource('servicio','ServicioController');
Route::resource('responsable','ResponsableController');
Route::resource('veterinario','VeterinarioController');
Route::resource('animal','AnimalController');
Route::resource('alimento','AlimentoController');
Route::resource('raza','RazaController');
Route::resource('actividad','ActividadController');

Route::resource('enfermedades_sufridas_mascotas','EnfermedadesSufridasMascotasController');
Route::resource('facturaproveedor','FacturaproveedorController');
Route::resource('facturaservicio','FacturaservicioController');
Route::resource('facturatienda','FacturatiendaController');
Route::resource('ficharegistro','FicharegistroController');
Route::resource('inventario','InventarioController');
Route::resource('modalidadcheque','ModalidadchequeController');
Route::resource('modalidadefectivo','ModalidadefectivoController');
Route::resource('modalidadtarjeta','ModalidadtarjetaController');
Route::resource('ordencompra','OrdencompraController');
Route::resource('Ordendeuso','OrdendeusoController');
Route::resource('producto','ProductoController');
Route::resource('productos_distribuidos_proveedor','ProductosDistribuidosProveedorController');
Route::resource('productos_factura_proveedor','ProductosFacturaProveedorController');
Route::resource('productos_factura_tienda','ProductosFacturaTiendaController');
Route::resource('productos_orden_compra','ProductosOrdenCompraController');
Route::resource('proveedor','ProveedorController');
Route::resource('relacionesmascota','RelacionesmascotaController');
Route::resource('reserva','ReservaController');
Route::resource('servicioporfacturaservicio','ServicioporfacturaservicioController');
Route::resource('telefonosresponsables','TelefonosresponsablesController');
Route::resource('vacuna','VacunaController');
Route::resource('vacunaporraza','VacunaporrazaController');
Route::resource('vacunas_aplicadas_mascotas','VacunasAplicadasMascotasController');


/*Rutas del menu y el sistema de autentificacion */

Route::post('login','Auth/LoginController@login')->name('login');

Route::post('login','Auth/LoginController@logout')->name('logout');


Route::get('dashboard','DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





?>




