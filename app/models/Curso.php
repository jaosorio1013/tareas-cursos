<?php

class Curso extends \Eloquent {
	protected $fillable = ['nombre'];

	public function tareas()
	{
		return $this->hasMany('Tarea');
	}

}