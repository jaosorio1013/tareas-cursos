<?php

class ActividadesController extends BaseController {

	public function listar($idTarea)
	{
		$actividades = Actividad::where('tarea_id', $idTarea)->get();
		$tarea = Tarea::find($idTarea);
		return View::make('actividades/listar', compact('actividades', 'tarea'));
	}

	public function formularioCrear($idTarea)
	{
		$tarea = Tarea::find($idTarea);
		return View::make('actividades/crear', compact('tarea'));
	}

	public function crear($idTarea)
	{
		$actividad = new Actividad();
		$actividad->fill(Input::all());
		$actividad->tarea_id = $idTarea;
		$actividad->save();

		return Redirect::to('actividades/'.$idTarea);
	}

	public function formularioActualizar($idActividad)
	{
		$actividad = Actividad::find($idActividad);
		return View::make('actividades/actualizar', compact('actividad'));
	}

	public function actualizar($idActividad)
	{
		$actividad = Actividad::find($idActividad);
		$actividad->fill(Input::all());
		$actividad->save();

		return Redirect::to('actividades/'.$actividad->tarea->id);
	}

}
