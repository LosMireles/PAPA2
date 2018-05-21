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

Route::get('pruebaPdf','CubiculoController@imprimir');

// Técnicos académicos -------------------------------------------------------------------

Route::get('/error', function($mensaje = null){
    return view('general.error', ['mensaje' => $mensaje]);
});

Route::get('/tecnicos_academicos/ver_curriculo', 'TecnicoAcademicoController@ver_curriculo');
Route::resources(
    ['espacios'    => 'EspacioController',
     'aulas'       => 'AulaController',
     'cubiculos'   => 'CubiculoController',
     'asesorias'   => 'AsesoriaController',
     'sanitarios'  => 'SanitarioController',
     'auditorios'  => 'AuditorioController',
     'cursos'      => 'CursoController',
     'softwares'   => 'SoftwareController',
     'equipos'     => 'EquipoController',
     'asignaturas' => 'AsignaturaController',
     'tecnicos_academicos' => 'TecnicoAcademicoController'],

    ['except' => 'show']);


