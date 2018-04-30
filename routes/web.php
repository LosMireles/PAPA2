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


Route::get('/', 'RoutesController@index');

Route::get('/infraestructura', 'RoutesController@infraestructura');

Route::get('/equipamiento', 'RoutesController@equipamiento');
Route::get('/equipamiento/equipos', 'EquipoController@equipos');

Route::get('/equipamiento/equipos/agregar_equipo', 'EquipoController@agregar_equipo');
Route::get('/equipamiento/equipos/ver_equipos', 'EquipoController@ver_equipos');
Route::get('/equipamiento/equipos/eliminar_equipos', 'EquipoController@eliminar_equipos');
Route::get('/equipamiento/equipos/actualizar_equipos', 'EquipoController@actualizar_equipos');
Route::get('/equipamiento/equipos/actualizar_equipos/{id}', 'EquipoController@mostrar_datos_equipo');

Route::post('/gestion_equipo_agregar', 'EquipoController@gestion_equipo_agregar');
Route::post('/gestion_equipo_borrar', 'EquipoController@gestion_equipo_borrar');
Route::post('/gestion_equipo_modificar', 'EquipoController@gestion_equipo_modificar');

//espacios
Route::get('/infraestructura/espacio', 'RoutesController@Espacio');

Route::get('insertarEspacio','EspacioController@insertform');
Route::post('CrearEspacio','EspacioController@store');

Route::get('verEspacio','EspacioController@indexVer');

Route::get('borrarEspacio','EspacioController@indexBorrar');
Route::post('deleteEspacio','EspacioController@destroy');

Route::get('editarEspacio','EspacioController@index');
Route::get('editEspacio/{id}','EspacioController@show');
Route::post('editEspacio/{id}','EspacioController@edit');

//software
Route::get('/equipamiento/software', 'RoutesController@Software');

Route::get('insertarSoftware','SoftwareController@insertform');
Route::post('CrearSoftware','SoftwareController@store');
Route::get('verSoftware','SoftwareController@indexVer');

Route::get('borrarSoftware','SoftwareController@indexBorrar');
Route::post('deleteSoftware','SoftwareController@destroy');

Route::get('editarSoftware','SoftwareController@index');
Route::get('editSoftware/{id}','SoftwareController@show');
Route::post('editSoftware/{id}','SoftwareController@edit');

//cubiculo
Route::get('/infraestructura/cubiculo', 'RoutesController@Cubiculo');

Route::get('insertarCubiculo','CubiculoController@insertform');
Route::post('CrearCubiculo','CubiculoController@store');

Route::get('verCubiculo','CubiculoController@indexVer');

Route::get('borrarCubiculo','CubiculoController@indexBorrar');
Route::post('deleteCubiculo','CubiculoController@destroy');

Route::get('editarCubiculo','CubiculoController@indexEditar');
Route::get('editCubiculo/{id}','CubiculoController@show');
Route::post('editCubiculo/{id}','CubiculoController@edit');

//aula
Route::get('/infraestructura/aula', 'RoutesController@aula');

Route::get('insertarAula','AulaController@insertform');
Route::post('CrearAula','AulaController@store');

Route::get('verAula','AulaController@indexVer');

Route::get('borrarAula','AulaController@indexBorrar');
Route::post('deleteAula','AulaController@destroy');

Route::get('editarAula','AulaController@indexEditar');
Route::get('editAula/{id}','AulaController@show');
Route::post('editAula/{id}','AulaController@edit');
