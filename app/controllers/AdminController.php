<?php

class AdminController extends BaseController {

	public function mostrarFormularioCrearTarea()
	{
		return View::make('admin/crear-tarea');
	}


	public function crearTarea()
	{
		$tarea = new Tarea();
		$tarea->fill(Input::all());
		$tarea->save();

		$msg = 'Se creo la tarea '.$tarea->titulo;

		return View::make('admin/crear-tarea', compact('msg'));
	}

	public function mostrarFormularioActializarTarea($idTarea)
	{
		$tarea = Tarea::find($idTarea);
		return View::make('admin/actualizar-tarea', compact('tarea', 'idTarea'));
	}

	public function actualizarTarea($idTarea)
	{
		$tarea = Tarea::find($idTarea);
		$tarea->fill(Input::all());
		$tarea->save();

		$msg = 'Se actualizo la tarea '.$tarea->titulo;

		return View::make('admin/actualizar-tarea', compact('msg', 'tarea', 'idTarea'));
	}

}
