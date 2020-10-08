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

Route::get('/', function () {
    return view('welcome');
});

Route::get("plantilla", function(){
    return view("plantilla");
});

Route::get('cclientes', 'clienteController@indexx')->name('clientess');
Route::get('clientes', 'clienteController@index')->name('clientes');
Route::get('clientes/{id}', 'clienteController@listar')->name('clientes.listar');
Route::put('clientes/{id}', 'clienteController@editar')->name('clientes.editar');
Route::delete('clientes/{id}', 'clienteController@eliminar')->name('clientes.eliminar');
Route::post('clientes', 'clienteController@guardar')->name('clientes.guardar');

Route::get('vehiculo', 'vehiculoController@indexx')->name('vehiculo');
Route::get('vehiculos', 'vehiculoController@index')->name('vehiculos');
Route::get('vehiculos/{id}', 'vehiculoController@listar')->name('vehiculos.listar');
Route::put('vehiculos/{id}', 'vehiculoController@editar')->name('vehiculos.editar');
Route::delete('vehiculos/{id}', 'vehiculoController@eliminar')->name('vehiculos.eliminar');
Route::post('vehiculos', 'vehiculoController@guardar')->name('vehiculos.guardar');

Route::get('marca', 'marcaController@indexx')->name('marca');
Route::get('marcas', 'marcaController@index')->name('marcas');
Route::get('marcas/{id}', 'marcaController@listar')->name('marcas.listar');
Route::put('marcas/{id}', 'marcaController@editar')->name('marcas.editar');
Route::delete('marcas/{id}', 'marcaController@eliminar')->name('marcas.eliminar');
Route::post('marcas', 'marcaController@guardar')->name('marcas.guardar');

Route::get('modelo', 'modeloController@indexx')->name('modelo');
Route::get('modelos', 'modeloController@index')->name('modelos');
Route::get('modelos/{id}', 'modeloController@listar')->name('modelos.listar');
Route::put('modelos/{id}', 'modeloController@editar')->name('modelos.editar');
Route::delete('modelos/{id}', 'modeloController@eliminar')->name('modelos.eliminar');
Route::post('modelos', 'modeloController@guardar')->name('modelos.guardar');

Route::get('empleado', 'empleadoController@indexx')->name('empleado');
Route::get('empleados', 'empleadoController@index')->name('empleados');
Route::get('empleados/{id}', 'empleadoController@listar')->name('empleados.listar');
Route::put('empleados/{id}', 'empleadoController@editar')->name('empleados.editar');
Route::delete('empleados/{id}', 'empleadoController@eliminar')->name('empleados.eliminar');
Route::post('empleados', 'empleadoController@guardar')->name('empleados.guardar');

Route::get('pagoempresa', 'pagoempresaController@indexx')->name('pagoempresa');
Route::get('pagoempresas', 'pagoempresaController@index')->name('pagoempresas');
Route::get('pagoempresas/{id}', 'pagoempresaController@listar')->name('pagoempresas.listar');
Route::put('pagoempresas/{id}', 'pagoempresaController@editar')->name('pagoempresas.editar');
Route::delete('pagoempresas/{id}', 'pagoempresaController@eliminar')->name('pagoempresas.eliminar');
Route::post('pagoempresas', 'pagoempresaController@guardar')->name('pagoempresas.guardar');

Route::get('sservicios', 'servicioController@indexx')->name('ssservicios');
Route::get('servicios', 'servicioController@index')->name('servicios');
Route::get('servicios/{id}', 'servicioController@listar')->name('servicios.listar');
Route::put('servicios/{id}', 'servicioController@editar')->name('servicios.editar');
Route::delete('servicios/{id}', 'servicioController@eliminar')->name('servicios.eliminar');
Route::post('servicios', 'servicioController@guardar')->name('servicios.guardar');

Route::get('direccion', 'direccionController@indexx')->name('direccion');
Route::get('direcciones', 'direccionController@index')->name('direcciones');
Route::get('direcciones/{id}', 'direccionController@listar')->name('direcciones.listar');
Route::put('direcciones/{id}', 'direccionController@editar')->name('direcciones.editar');
Route::delete('direcciones/{id}', 'direccionController@eliminar')->name('direcciones.eliminar');
Route::post('direcciones', 'direccionController@guardar')->name('direcciones.guardar');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
