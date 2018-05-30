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

Route::get('/aulas/create_asesoria', 'AulaController@create_asesoria');

// Técnicos académicos -------------------------------------------------------------------

Route::get('/error', function($mensaje = null){
    return view('general.error', ['mensaje' => $mensaje]);
});

Route::get('/tecnicos_academicos/ver_curriculo/{id}', 'TecnicoAcademicoController@ver_curriculo');


// Rutas para ver imagenes de infraestructura
Route::get('/aulas/{tipo}/viewImg', 'AulaController@viewImg');
Route::get('/cubiculos/{tipo}/viewImg', 'CubiculoController@viewImg');
Route::get('/cubiculosMini/{tipo}/viewImg', 'CubiculoMiniController@viewImg');
Route::get('/asesorias/{tipo}/viewImg', 'AsesoriaController@viewImg');
Route::get('/auditorios/{tipo}/viewImg', 'AuditorioController@viewImg');
Route::get('/sanitarios/{tipo}/viewImg', 'SanitarioController@viewImg');

// Rutas para agregar imagenes a infraestructura
Route::post('/aulas/{tipo}/guardarImg', 'AulaController@guardarImg');
Route::post('/asesorias/{tipo}/guardarImg', 'AsesoriaController@guardarImg');
Route::post('/auditorios/{tipo}/guardarImg', 'AuditorioController@guardarImg');
Route::post('/cubiculos/{tipo}/guardarImg', 'CubiculoController@guardarImg');
Route::post('/cubiculosMini/{tipo}/guardarImg', 'CubiculoMiniController@guardarImg');
Route::post('/sanitarios/{tipo}/guardarImg', 'SanitarioController@guardarImg');

// Rutas para agregar igual
Route::get('/equipos/crear_igual/{id}', 'EquipoController@crear_igual');

// Ruta para la relacion de cursos software
Route::get('/cursos/relacionar_cursos_software/{id}', 'CursoController@relacionar_cursos_software');
Route::post('/cursos/crear_relacion/{id}', 'CursoController@crear_relacion');

// Rutas para borrar imagenes de infraestructura
// Aulas
Route::post('/aulas/{tipo}/borrarImg/{imagen}', [
  'uses' => 'AulaController@borrarImg',
  'as' => 'borrarImgAula'
]); 

Route::get('/aulas/relacionar_equipos/{id}', 'AulaController@relacionar_equipos');
Route::patch('/aulas/relacionar_equipos/{id}', 'AulaController@relacionar_equipos_post');

// Asesorias
Route::post('/asesorias/{tipo}/borrarImg/{imagen}', [
  'uses' => 'AsesoriaController@borrarImg',
  'as' => 'borrarImgAsesoria'
]);

// Auditorios
Route::post('/auditorios/{tipo}/borrarImg/{imagen}', [
  'uses' => 'AuditorioController@borrarImg',
  'as' => 'borrarImgAuditorio'
]);

// Cubiculos
Route::post('/cubiculos/{tipo}/borrarImg/{imagen}', [
  'uses' => 'CubiculoController@borrarImg',
  'as' => 'borrarImgCubiculo'
]);
Route::post('/cubiculosMini/{tipo}/borrarImg/{imagen}', [
  'uses' => 'CubiculoMiniController@borrarImg',
  'as' => 'borrarImgCubiculoMini'
]);
// Sanitarios
Route::post('/sanitarios/{tipo}/borrarImg/{imagen}', [
  'uses' => 'SanitarioController@borrarImg',
  'as' => 'borrarImgSanitario'
]);

//
Route::resources(
    ['espacios'            => 'EspacioController',
     'aulas'               => 'AulaController',
     'cubiculos'           => 'CubiculoController',
	 'cubiculosMini'       => 'CubiculoMiniController',
     'asesorias'           => 'AsesoriaController',
     'sanitarios'          => 'SanitarioController',
     'auditorios'          => 'AuditorioController',
     'cursos'              => 'CursoController',
     'softwares'           => 'SoftwareController',
     'equipos'             => 'EquipoController',
	 'equiposMini'         => 'EquipoMiniController',
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
     'inciso_9_1_12'       => 'Inciso9_1_12Controller',
     'incisos'             => 'IncisoController'],

    ['except' => 'show']);

//crete, store
Route::get('aulas/create/{inciso?}', 'AulaController@create');
Route::post('aulas/{inciso?}', 'AulaController@store');
//edit, update
Route::get('aulas/{aula}/edit/{inciso?}', 'AulaController@edit');
Route::patch('aulas/{aula}/{inciso?}', 'AulaController@update');

Route::delete('aulas/{aula}/{inciso?}', 'AulaController@destroy');
