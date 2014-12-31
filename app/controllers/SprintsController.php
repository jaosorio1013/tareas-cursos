<?php

class SprintsController extends BaseController {

	public function listar()
	{
		$sprints = Sprint::all();
		return View::make('sprints/listar', compact('sprints'));
	}

	public function formularioCrear()
	{
		return View::make('sprints/crear');
	}

	public function crear()
	{
		$actividad = new Sprint();
		$actividad->fill(Input::all());
		$actividad->save();

		return Redirect::to('sprints');
	}

	public function formularioActualizar($idSprint)
	{
		$sprint = Sprint::find($idSprint);
		return View::make('sprints/actualizar', compact('sprint'));
	}

	public function actualizar($idSprint)
	{
		$sprint = Sprint::find($idSprint);
		$sprint->fill(Input::all());
		$sprint->save();

		return Redirect::to('sprints');
	}

	public function formularioAsignarTareas($idSprint)
	{
		$tareas = Tarea::where('sprint_id', 1)->get();
		$sprint = Sprint::find($idSprint);

		return View::make('sprints/asignar-tareas', compact('tareas', 'sprint'));
	}

	public function asignarTareas($idSprint)
	{
		$tareasId = Input::only('tarea_id');

		foreach($tareasId['tarea_id'] AS $idTarea)
		{
			$tarea = Tarea::find($idTarea);
			$tarea->sprint_id = $idSprint;
			$tarea->save();
		}

		return Redirect::to("sprints/asignar-tareas/{$idSprint}");
	}

}
