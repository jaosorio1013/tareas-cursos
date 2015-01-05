<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	protected function asignarColorSegunEstado($estado)
	{
		$arrayColores = [
			'Sin iniciar' => '#f2f2f2',
			'Investigación' => '#ff555e',
			'Guión' => '#f9ce99',
			'Grabación' => '#fef8b8',
			'Edición' => '#b75375',
			'Programando' => '#c4c4c4',
			'Correcciones' => '#4597c9',
			'Finalización' => '#43b4a0',
			'Aprobado' => '#e2ea95',
			'Subido' => '#58a727'
		];

		return $arrayColores[$estado];
	}

}
