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


	//Sprint
	public function mostrarFormularioCrearSprint()
	{
		return View::make('admin/crear-sprint');
	}

	public function crearSprint()
	{
		$sprint = new Tarea();
		$sprint->fill(Input::all());
		$sprint->save();

		$msg = 'Se creo el Sprint '.$sprint->titulo;

		return View::make('admin/crear-sprint', compact('msg'));
	}

	public function mostrarFormularioActializarSprint($idSprint)
	{
		$sprint = Tarea::find($idSprint);
		return View::make('admin/actualizar-sprint', compact('sprint', 'idTarea'));
	}

	public function actualizarSprint($idSprint)
	{
		$sprint = Tarea::find($idSprint);
		$sprint->fill(Input::all());
		$sprint->save();

		$msg = 'Se actualizo la sprint '.$sprint->numero;

		return View::make('admin/actualizar-sprint', compact('msg', 'sprint', 'idSprint'));
	}

}
