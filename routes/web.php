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
//Route::get('/equipamiento/software', 'RoutesController@Software');

//Route::get('insertarSoftware','SoftwareController@insertform');
//Route::post('CrearSoftware','SoftwareController@store');
//Route::get('verSoftware','SoftwareController@indexVer');

//Route::get('borrarSoftware','SoftwareController@indexBorrar');
//Route::post('deleteSoftware','SoftwareController@destroy');

//Route::get('editarSoftware','SoftwareController@index');
//Route::get('editSoftware/{id}','SoftwareController@show');
//Route::post('editSoftware/{id}','SoftwareController@edit');

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

// Asignaturas
Route::get('/asignaturas', 'AsignaturaController@index_ver');

Route::get('/asignaturas/agregar_asignatura', 'AsignaturaController@agregar_asignatura');
Route::post('/asignaturas/agregar_asignatura/agregar', 'AsignaturaController@agregar_asignatura_post');

Route::get('/asignaturas/actualizar_asignatura', 'AsignaturaController@actualizar_asignaturas');
Route::get('/asignaturas/actualizar_asignatura/{id}', 'AsignaturaController@actualizar_asignaturas_especifico');
Route::post('/asignaturas/actualizar_asignatura_actualizar', 'AsignaturaController@actualizar_asignaturas_post');

Route::get('/asignaturas/ver_asignaturas', 'AsignaturaController@ver_asignaturas');

Route::get('/asignaturas/eliminar_asignatura', 'AsignaturaController@eliminar_asignatura');
Route::post('/asignaturas/eliminar_asignatura/eliminar', 'AsignaturaController@eliminar_asignatura_post');

//Curso
Route::get('/infraestructura/curso', 'RoutesController@curso');

Route::get('insertarCurso','CursoController@insertform');
Route::post('CrearCurso','CursoController@store');

Route::get('verCurso','CursoController@indexVer');

Route::get('borrarCurso','CursoController@indexBorrar');
Route::post('deleteCurso','CursoController@destroy');

Route::get('editarCurso','CursoController@indexEditar');
Route::get('editCurso/{id}','CursoController@show');
Route::post('editCurso/{id}','CursoController@edit');

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
    ['softwares' => 'SoftwareController',
     'equipos' => 'EquipoController'],
    ['except' => 'show']);

