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

Route::get('insertarCubiculo','CubiculoController@insertform');
Route::post('CrearCubiculo','CubiculoController@store');
Route::get('verCubiculo','CubiculoController@indexVer');


Route::get('borrarCubiculo','CubiculoController@indexBorrar');
Route::get('delete/{id}','CubiculoController@destroy');
