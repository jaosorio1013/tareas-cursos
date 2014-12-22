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

}