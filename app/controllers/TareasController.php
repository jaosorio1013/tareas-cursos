<?php

class TareasController extends BaseController {

	public function listar($idSprint)
	{
		$tareas = Tarea::where('sprint_id', $idSprint)->get();
		$sprint = Sprint::find($idSprint);
		return View::make('tareas/listar', compact('tareas', 'sprint'));
	}

	public function listarTodo()
	{

	}

	public function formularioCrear($idSprint)
	{
		$sprint = Sprint::find($idSprint);
		$sprints = Sprint::where('curso_id', $sprint->curso->id)->lists('numero', 'id');
		return View::make('tareas/crear', compact('sprints', 'sprint'));
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
		$sprints = Sprint::where('curso_id', $tarea->sprint->curso->id)->lists('numero', 'id');
		return View::make('tareas/actualizar', compact('tarea', 'sprints'));
	}

	public function actualizar($idTarea)
	{
		$tarea = Tarea::find($idTarea);
		$tarea->fill(Input::all());
		$tarea->save();

		return Redirect::to('tareas');
	}

}
