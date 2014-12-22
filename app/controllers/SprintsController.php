<?php

class SprintsController extends BaseController {

	public function listar($idCurso)
	{
		$sprints = Sprint::where('curso_id', $idCurso)->get();
		$curso = Curso::find($idCurso);
		return View::make('sprints/listar', compact('sprints', 'curso'));
	}

	public function formularioCrear($idCurso)
	{
		$curso = Curso::find($idCurso);
		$cursos = Curso::lists('nombre', 'id');
		return View::make('sprints/crear', compact('curso', 'cursos'));
	}

	public function crear($idCurso)
	{
		$actividad = new Sprint();
		$actividad->fill(Input::all());
		$actividad->curso_id = $idCurso;
		$actividad->save();

		return Redirect::to('sprints/'.$idCurso);
	}

	public function formularioActualizar($idSprint)
	{
		$sprint = Sprint::find($idSprint);
		$cursos = Curso::lists('nombre', 'id');
		return View::make('sprints/actualizar', compact('sprint', 'cursos'));
	}

	public function actualizar($idSprint)
	{
		$sprint = Sprint::find($idSprint);
		$sprint->fill(Input::all());
		$sprint->save();

		return Redirect::to('sprints/'.$sprint->curso->id);
	}

}
