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

//cubiculo
Route::get('/infraestructura/cubiculo', 'RoutesController@Cubiculo');

Route::get('insertarCubiculo','CubiculoController@insertform');
Route::post('CrearCubiculo','CubiculoController@store');
Route::get('insertarCubiculos','CubiculoController@dummie');

Route::get('verCubiculo','CubiculoController@indexVer');
Route::get('pruebaPdf','CubiculoController@imprimir');

Route::get('borrarCubiculo','CubiculoController@indexBorrar');
Route::post('deleteCubiculo','CubiculoController@destroy');

Route::get('editarCubiculo','CubiculoController@indexEditar');
Route::get('editCubiculo/{id}','CubiculoController@show');
Route::post('editCubiculo/{id}','CubiculoController@edit');

//aula
Route::get('/infraestructura/aula', 'RoutesController@aula');

Route::get('insertarAula','AulaController@insertform');
Route::post('CrearAula','AulaController@store');
Route::get('insertarAulas','AulaController@dummie');

Route::get('verAula','AulaController@indexVer');

Route::get('borrarAula','AulaController@indexBorrar');
Route::post('deleteAula','AulaController@destroy');

Route::get('editarAula','AulaController@indexEditar');
Route::get('editAula/{id}','AulaController@show');
Route::post('editAula/{id}','AulaController@edit');


//Sanitaro
Route::get('/infraestructura/sanitario', 'RoutesController@sanitario');

Route::get('insertarSanitario','SanitarioController@insertform');
Route::post('CrearSanitario','SanitarioController@store');
Route::get('insertarSanitarios','SanitarioController@dummie');

Route::get('verSanitario','SanitarioController@indexVer');

Route::get('borrarSanitario','SanitarioController@indexBorrar');
Route::post('deleteSanitario','SanitarioController@destroy');

Route::get('editarSanitario','SanitarioController@indexEditar');
Route::get('editSanitario/{id}','SanitarioController@show');
Route::post('editSanitario/{id}','SanitarioController@edit');

// Asesoria
Route::get('/infraestructura/asesoria', 'RoutesController@asesoria');

Route::get('insertarAsesoria','AsesoriaController@insertform');
Route::post('CrearAsesoria','AsesoriaController@store');
Route::get('insertarAsesorias','AsesoriaController@dummie');

Route::get('verAsesoria','AsesoriaController@indexVer');

Route::get('borrarAsesoria','AsesoriaController@indexBorrar');
Route::post('deleteAsesoria','AsesoriaController@destroy');

Route::get('editarAsesoria','AsesoriaController@indexEditar');
Route::get('editAsesoria/{id}','AsesoriaController@show');
Route::post('editAsesoria/{id}','AsesoriaController@edit');

// Auditorio
Route::get('/infraestructura/auditorio', 'RoutesController@auditorio');

Route::get('insertarAuditorio','AuditorioController@insertform');
Route::post('CrearAuditorio','AuditorioController@store');
Route::get('insertarAuditorios','AuditorioController@dummie');

Route::get('verAuditorio','AuditorioController@indexVer');

Route::get('borrarAuditorio','AuditorioController@indexBorrar');
Route::post('deleteAuditorio','AuditorioController@destroy');

Route::get('editarAuditorio','AuditorioController@indexEditar');
Route::get('editAuditorio/{id}','AuditorioController@show');
Route::post('editAuditorio/{id}','AuditorioController@edit');

// Técnicos académicos -------------------------------------------------------------------
Route::get('/tecnico_academico','TecnicoAcademicoController@index');

Route::get('/tecnico_academico/insertar', 'TecnicoAcademicoController@insertar');
Route::post('/tecnico_academico/insertar_tecnico', 'TecnicoAcademicoController@guardar');

Route::get('/tecnico_academico/ver', 'TecnicoAcademicoController@ver');

Route::get('/tecnico_academico/editar', 'TecnicoAcademicoController@update_show');

Route::get('/tecnico_academico/borrar', 'TecnicoAcademicoController@delete_show');

Route::get('/error', function($mensaje = null){
    return view('general/error', ['mensaje' => $mensaje]);
});

Route::resources(
    ['espacios'    => 'EspacioController',
     'cursos'      => 'CursoController',
     'softwares'   => 'SoftwareController',
     'equipos'     => 'EquipoController',
     'asignaturas' => 'AsignaturaController'],

    ['except' => 'show']);

