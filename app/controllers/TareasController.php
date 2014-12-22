<?php

class TareasController extends BaseController {

	public function listar()
	{
		$tareas = Tarea::all();
		return View::make('tareas/listar', compact('tareas'));
	}

	public function formularioCrear()
	{
		return View::make('tareas/crear');
	}

	public function crear()
	{
		$tarea = new Tarea();
		$tarea->fill(Input::all());
		$tarea->save();

		return Redirect::to('tareas');
	}

	public function formularioActualizar($idTarea)
	{
		$tarea = Tarea::find($idTarea);
		return View::make('tareas/actualizar', compact('tarea'));
	}

	public function actualizar($idTarea)
	{
		$tarea = Tarea::find($idTarea);
		$tarea->fill(Input::all());
		$tarea->save();

		return Redirect::to('tareas');
	}

}
