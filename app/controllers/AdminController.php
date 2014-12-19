<?php

class AdminController extends BaseController {

	public function formularioTarea()
	{
		return View::make('admin/crear-tarea');
	}

	public function crearTarea()
	{
		$tarea = new Tarea();

		$tarea->prioridad = Input::get('prioridad');
		$tarea->titulo = Input::get('titulo');
		$tarea->curso = Input::get('curso');
		$tarea->sprint = Input::get('sprint');

		$tarea->save();

		$msg = 'Se creo la tarea '.$tarea->titulo;

		return View::make('admin/crear-tarea', compact('msg'));
	}

}
