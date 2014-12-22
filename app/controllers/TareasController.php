<?php

class TareasController extends BaseController {

	public function listarPorSprint($idSprint)
	{
		$tareas = Tarea::where('sprint_id', $idSprint)->get();
		$sprint = Sprint::find($idSprint);
		return View::make('tareas/listar', compact('tareas', 'sprint'));
	}

	public function listarPorCurso($idCurso)
	{
		$tareas = Tarea::where('curso_id', $idCurso)->get();
		$curso = Curso::find($idCurso);
		return View::make('tareas/listar', compact('tareas', 'curso'));
	}

	public function listarTodo()
	{
		$tareas = Tarea::all();
		return View::make('tareas/listar-todo', compact('tareas'));
	}

	public function formularioCrear()
	{
		$cursos = Curso::lists('nombre', 'id');
		$sprints = Sprint::lists('numero', 'id');
		return View::make('tareas/crear', compact('sprints', 'cursos', 'sprints'));
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
		$cursos = Curso::lists('nombre', 'id');
		$sprints = Sprint::lists('numero', 'id');
		return View::make('tareas/actualizar', compact('tarea', 'cursos', 'sprints'));
	}

	public function actualizar($idTarea)
	{
		$tarea = Tarea::find($idTarea);
		$tarea->fill(Input::all());
		$tarea->save();

		return Redirect::to('tareas');
	}

}
