<?php

class HomeController extends BaseController {

	public function index()
	{
		$tareas = Tarea::all();
		foreach($tareas AS $tarea)
		{
			$ultimaActividad = Actividad::where('tarea_id', $tarea->id)->orderBy('updated_at', 'DESC')->first();

			$tarea->color = '#f2f2f2';
			if($ultimaActividad)
			{
				$tarea->color = $this->asignarColorSegunEstado($ultimaActividad->estado);
			}
		}
		return View::make('home', compact('tareas'));
	}

}
