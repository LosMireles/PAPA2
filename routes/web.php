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

Route::get('pruebaPdf','Inciso9_1_6Controller@imprimir');

// Técnicos académicos -------------------------------------------------------------------

Route::get('/error', function($mensaje = null){
    return view('general.error', ['mensaje' => $mensaje]);
});

Route::get('/tecnicos_academicos/ver_curriculo/{id}', 'TecnicoAcademicoController@ver_curriculo');


// Rutas para ver imagenes de infraestructura
Route::get('/aulas/{tipo}/viewImg', 'AulaController@viewImg');
Route::get('/cubiculos/{tipo}/viewImg', 'CubiculoController@viewImg');
Route::get('/asesorias/{tipo}/viewImg', 'AsesoriaController@viewImg');
Route::get('/auditorios/{tipo}/viewImg', 'AuditorioController@viewImg');
Route::get('/sanitarios/{tipo}/viewImg', 'SanitarioController@viewImg');
#Route::get('/aulas/{tipo}deleteImg', 'AulaController@deleteImg');

//
Route::resources(
    ['espacios'            => 'EspacioController',
     'aulas'               => 'AulaController',
     'cubiculos'           => 'CubiculoController',
     'asesorias'           => 'AsesoriaController',
     'sanitarios'          => 'SanitarioController',
     'auditorios'          => 'AuditorioController',
     'cursos'              => 'CursoController',
     'softwares'           => 'SoftwareController',
     'equipos'             => 'EquipoController',
     'asignaturas'         => 'AsignaturaController',
     'tecnicos_academicos' => 'TecnicoAcademicoController',
     'inciso_9_1_3'        => 'Inciso9_1_3Controller',
     'inciso_9_1_4'        => 'Inciso9_1_4Controller',
     'inciso_9_1_6'        => 'Inciso9_1_6Controller',
     'inciso_9_1_7'        => 'Inciso9_1_7Controller',
     'inciso_9_1_8'        => 'Inciso9_1_8Controller',
     'inciso_9_1_9'        => 'Inciso9_1_9Controller',
     'inciso_9_1_10'       => 'Inciso9_1_10Controller',
     'inciso_9_1_11'       => 'Inciso9_1_11Controller',
     'inciso_9_1_13'       => 'Inciso9_1_13Controller',
     'inciso_9_2_1'        => 'Inciso9_2_1Controller',
     'inciso_9_2_2'        => 'Inciso9_2_2Controller',
     'inciso_9_2_7'        => 'Inciso9_2_7Controller',
     'inciso_9_2_11'       => 'Inciso9_2_11Controller',
     'inciso_9_2_12'       => 'Inciso9_2_12Controller',
     'inciso_9_2_14'       => 'Inciso9_2_14Controller',
     'inciso_9_2_5'        => 'Inciso9_2_5Controller',
     'incisos'             => 'IncisoController'],

    ['except' => 'show']);
