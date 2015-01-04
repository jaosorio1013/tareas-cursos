<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('cursos', ['as' => 'cursos', 'uses' => 'CursosController@listar']);
Route::get('cursos/crear', ['as' => 'crear_curso', 'uses' => 'CursosController@formularioCrear']);
Route::post('cursos/crear/', ['as' => 'crear_curso', 'uses' => 'CursosController@crear']);
Route::get('cursos/actualizar/{id}', ['as' => 'actualizar_curso', 'uses' => 'CursosController@formularioActualizar']);
Route::put('cursos/actualizar/{id}', ['as' => 'actualizar_curso', 'uses' => 'CursosController@actualizar']);
//Route::get('cursos/asignar-tareas/{id}', ['as' => 'asignar_tareas_curso', 'uses' => 'CursosController@formularioAsignarTareas']);
//Route::put('cursos/asignar-tareas/{id}', ['as' => 'asignar_tareas_curso', 'uses' => 'CursosController@asignarTareas']);

Route::get('sprints', ['as' => 'sprints', 'uses' => 'SprintsController@listar']);
Route::get('sprints/crear', ['as' => 'crear_sprint', 'uses' => 'SprintsController@formularioCrear']);
Route::post('sprints/crear', ['as' => 'crear_sprint', 'uses' => 'SprintsController@crear']);
Route::get('sprints/actualizar/{id}', ['as' => 'actualizar_sprint', 'uses' => 'SprintsController@formularioActualizar']);
Route::put('sprints/actualizar/{id}', ['as' => 'actualizar_sprint', 'uses' => 'SprintsController@actualizar']);
Route::get('sprints/asignar-tareas/{id}', ['as' => 'asignar_tareas_sprint', 'uses' => 'SprintsController@formularioAsignarTareas']);
Route::put('sprints/asignar-tareas/{id}', ['as' => 'asignar_tareas_sprint', 'uses' => 'SprintsController@asignarTareas']);

Route::get('tareas', ['as' => 'tareas', 'uses' => 'TareasController@listarTodo']);
Route::get('tareas/sprint/{idSprint}', ['as' => 'tareas_sprint', 'uses' => 'TareasController@listarPorSprint']);
Route::get('tareas/curso/{idCurso}', ['as' => 'tareas_curso', 'uses' => 'TareasController@listarPorCurso']);
Route::get('tareas/crear', ['as' => 'crear_tarea', 'uses' => 'TareasController@formularioCrear']);
Route::post('tareas/crear', ['as' => 'crear_tarea', 'uses' => 'TareasController@crear']);
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