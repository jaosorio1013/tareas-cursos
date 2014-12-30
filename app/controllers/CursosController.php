<?php

class CursosController extends BaseController {

	public function listar()
	{
		$cursos = Curso::all();
		return View::make('cursos/listar', compact('cursos'));
	}

	public function formularioCrear()
	{
		return View::make('cursos/crear');
	}

	public function crear()
	{
		$curso = new Curso();
		$curso->fill(Input::all());
		$curso->save();

		return Redirect::to('cursos');
	}

	public function formularioActualizar($idCurso)
	{
		$curso = Curso::find($idCurso);
		return View::make('cursos/actualizar', compact('curso'));
	}

	public function actualizar($idCurso)
	{
		$curso = Curso::find($idCurso);
		$curso->fill(Input::all());
		$curso->save();

		return Redirect::to('cursos');
	}

	public function formularioAsignarTarea($idCurso)
	{
		$tareas = Tarea::where('sprint_id', 0)->get();
		$curso = Sprint::find($idCurso);

		return View::make('cursos/asignar-tareas', compact('tareas', 'curso'));
	}

	public function asignarTarea($idCurso)
	{
		dd(Input::all());
		return Redirect::to("cursos/asignar-tarea/{$idCurso}");
	}

}
