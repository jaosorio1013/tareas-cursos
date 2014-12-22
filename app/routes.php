<?php


Route::get('tareas', ['as' => 'tareas', 'uses' => 'TareasController@listar']);
Route::get('tareas/crear', ['as' => 'crear_tarea', 'uses' => 'TareasController@formularioCrear']);
Route::post('tareas/crear/', ['as' => 'crear_tarea', 'uses' => 'TareasController@crear']);
Route::get('tareas/actualizar/{id}', ['as' => 'actualizar_tarea', 'uses' => 'TareasController@formularioActualizar']);
Route::put('tareas/actualizar/{id}', ['as' => 'actualizar_tarea', 'uses' => 'TareasController@actualizar']);

Route::get('actividades/{idTarea}', ['as' => 'actividades_tarea', 'uses' => 'ActividadesController@listar']);
Route::get('actividades/crear/{idTarea}', ['as' => 'crear_actividad', 'uses' => 'ActividadesController@formularioCrear']);
Route::post('actividades/crear/{idTarea}', ['as' => 'crear_actividad', 'uses' => 'ActividadesController@crear']);
Route::get('actividades/actualizar/{id}', ['as' => 'actualizar_actividad', 'uses' => 'ActividadesController@formularioActualizar']);
Route::put('actividades/actualizar/{id}', ['as' => 'actualizar_actividad', 'uses' => 'ActividadesController@actualizar']);

/*Route::get('/', function(){
	return Redirect::to('tareas');
});

Route::get('tareas', ['as' => 'tareas', 'uses' => 'GeneralController@tareas']);
Route::get('sprints', ['as' => 'sprints', 'uses' => 'GeneralController@sprints']);


Route::get('actividad/{id}', ['as' => 'actividades_tarea', 'uses' => 'GeneralController@actividades']);
Route::get('actividad/{id}/crear', ['as' => 'formulario_actividad', 'uses' => 'GeneralController@formularioActividades']);
Route::post('actividad/{id}/crear', ['as' => 'crear_actividad', 'uses' => 'GeneralController@crearActividad']);



# ADMINISTRADOR DE TAREAS
Route::get('admin', function(){
	return Redirect::to('admin/crear-tarea');
});

//Tareas
Route::get('admin/crear-tarea', ['as' => 'admin_formulario_crear_tarea', 'uses' => 'AdminController@mostrarFormularioCrearTarea']);
Route::post('admin/crear-tarea', ['as' => 'admin_crear_tarea', 'uses' => 'AdminController@crearTarea']);

Route::get('admin/actualizar-tarea/{id}', ['as' => 'admin_formulario_actualizar_tarea', 'uses' => 'AdminController@mostrarFormularioActializarTarea']);
Route::put('admin/actualizar-tarea/{id}', ['as' => 'admin_actualizar_tarea', 'uses' => 'AdminController@actualizarTarea']);

//Cursos
Route::get('admin/crear-curso', ['as' => 'admin_formulario_crear_curso', 'uses' => 'AdminController@mostrarFormularioCrearCurso']);
Route::post('admin/crear-curso', ['as' => 'admin_crear_curso', 'uses' => 'AdminController@crearCurso']);

Route::get('admin/actualizar-curso/{id}', ['as' => 'admin_formulario_actualizar_curso', 'uses' => 'AdminController@mostrarFormularioActializarCurso']);
Route::put('admin/actualizar-curso/{id}', ['as' => 'admin_actualizar_curso', 'uses' => 'AdminController@actualizarCurso']);

//Sprints
Route::get('admin/crear-sprint', ['as' => 'admin_formulario_crear_sprint', 'uses' => 'AdminController@mostrarFormularioCrearSprint']);
Route::post('admin/crear-sprint', ['as' => 'admin_crear_sprint', 'uses' => 'AdminController@crearSprint']);

Route::get('admin/actualizar-sprint/{id}', ['as' => 'admin_formulario_actualizar_sprint', 'uses' => 'AdminController@mostrarFormularioActializarSprint']);
Route::put('admin/actualizar-sprint/{id}', ['as' => 'admin_actualizar_sprint', 'uses' => 'AdminController@actualizarSprint']);*/