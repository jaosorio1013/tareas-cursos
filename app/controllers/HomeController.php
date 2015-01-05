<?php

class HomeController extends BaseController {

	public function index()
	{
		$tareas = Tarea::all();
		$tareas = $this->detallesListaTarea($tareas);

		return View::make('home', compact('tareas'));
	}

}
