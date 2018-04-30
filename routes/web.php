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
Route::get('/equipamiento/equipos', 'RoutesController@equipamiento');

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
