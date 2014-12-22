<?php

class HomeController extends BaseController {

	public function index()
	{
		$tareas = Tarea::all();
		return View::make('home', compact('tareas'));
	}

}
