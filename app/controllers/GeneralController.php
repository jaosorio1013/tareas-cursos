<?php

class GeneralController extends BaseController {

	public function tareas()
	{
		$tareas = Tarea::all();

		return View::make('tareas', compact('tareas'));
	}

	public function sprints()
	{
		$sprints = Sprint::all();

		return View::make('sprints', compact('sprints'));
	}

	public function actividades($idTarea)
	{
		$actividades = Actividad::where('tarea_id', '=', $idTarea)->get();

		return View::make('actividades/listado', compact('actividades', 'idTarea'));
	}

	public function formularioActividades($idTarea)
	{
		return View::make('actividades/crear', compact('idTarea'));
	}

	public function crearActividad($idTarea)
	{
		$actividad = new Actividad();

		$actividad->equipo = Input::get('equipo');
		$actividad->quien = Input::get('quien');
		$actividad->cuando = Input::get('cuando');
		$actividad->cuanto = Input::get('cuanto');
		$actividad->estado = Input::get('estado');
		$actividad->tarea_id = $idTarea;

		$actividad->save();

		return Redirect::to('actividad/'.$idTarea);
	}

}
