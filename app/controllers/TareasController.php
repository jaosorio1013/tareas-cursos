<?php

class TareasController extends BaseController {

	private $esfuerzo = [
		1 => 1,
		2 => 2,
		3 => 3,
		5 => 5,
		8 => 8,
		13 => 13,
		21 => 21,
		34 => 34,
	];

	public function listarPorSprint($idSprint)
	{
		$sprint = Sprint::find($idSprint);
		$tareas = Tarea::where('sprint_id', $idSprint)->get();
		$tareas = $this->detallesListaTarea($tareas);

		return View::make('tareas/listar', compact('tareas', 'sprint'));
	}

	public function listarPorCurso($idCurso)
	{
		$curso = Curso::find($idCurso);
		$tareas = Tarea::where('curso_id', $idCurso)->get();
		$tareas = $this->detallesListaTarea($tareas);

		return View::make('tareas/listar', compact('tareas', 'curso'));
	}

	public function listarTodo()
	{
		$tareas = Tarea::all();
		$tareas = $this->detallesListaTarea($tareas);

		return View::make('tareas/listar-todo', compact('tareas'));
	}

	public function formularioCrear()
	{
		$cursos = Curso::lists('nombre', 'id');
		$sprints = Sprint::lists('numero', 'id');
		$esfuerzo = $this->esfuerzo;
		return View::make('tareas/crear', compact('sprints', 'cursos', 'sprints', 'esfuerzo'));
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
		$esfuerzo = $this->esfuerzo;
		return View::make('tareas/actualizar', compact('tarea', 'cursos', 'sprints', 'esfuerzo'));
	}

	public function actualizar($idTarea)
	{
		$tarea = Tarea::find($idTarea);
		$tarea->fill(Input::all());
		$tarea->save();

		return Redirect::to('tareas');
	}

}
