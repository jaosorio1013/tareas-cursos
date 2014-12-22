<?php

class Curso extends \Eloquent {
	protected $fillable = [];

	public function tareas()
	{
		return $this->hasMany('Tarea');
	}

}