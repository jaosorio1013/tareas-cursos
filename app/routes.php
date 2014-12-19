<?php

Route::get('/', function(){
	return Redirect::to('tareas');
});

Route::get('tareas', ['as' => 'tareas', 'uses' => 'GeneralController@tareas']);
Route::get('actividad/{id}', ['as' => 'actividades_tarea', 'uses' => 'GeneralController@actividades']);
Route::get('actividad/{id}/crear', ['as' => 'formulario_actividad', 'uses' => 'GeneralController@formularioActividades']);
Route::post('actividad/{id}/crear', ['as' => 'crear_actividad', 'uses' => 'GeneralController@crearActividad']);



# ADMINISTRADOR DE TAREAS
Route::get('admin', function(){
	return Redirect::to('admin/crear-tarea');
});

Route::get('admin/crear-tarea', ['as' => 'admin_formulario_tarea', 'uses' => 'AdminController@formularioTarea']);
Route::post('admin/crear-tarea', ['as' => 'admin_crear_tarea', 'uses' => 'AdminController@crearTarea']);
