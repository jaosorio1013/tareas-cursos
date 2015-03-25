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
			'Investigación' => '#fdd700',
			'Guión' => '#f7d609',
			'Grabación' => '#e9d31a',
			'Edición' => '#dad025',
			'Programando' => '#cbcc2c',
			'Correcciones' => '#e2b7e2',
			'Finalización' => '#bcd1d3',
			'Aprobado' => '#95bf3d',
			'Subido' => '#8bbe3f'
		];

		return $arrayColores[$estado];
	}

	protected function detallesListaTarea($tareas)
	{
		foreach($tareas AS $tarea)
		{
			$ultimaActividad = Actividad::where('tarea_id', $tarea->id)->orderBy('updated_at', 'DESC')->first();

			$tarea->color = '#f2f2f2';
			$tarea->estado = 'Sin iniciar';
			if($ultimaActividad)
			{
				$tarea->color = $this->asignarColorSegunEstado($ultimaActividad->estado);
				$tarea->estado = $ultimaActividad->estado;
			}
		}

		return $tareas;
	}

}
