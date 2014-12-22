<?php

class Sprint extends \Eloquent {
	protected $fillable = ['numero', 'fecha_inicio', 'fecha_final'];

	public function tareas()
	{
		return $this->hasMany('Tarea');
	}

}