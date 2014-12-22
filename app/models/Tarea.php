<?php

class Tarea extends \Eloquent {
	protected $fillable = [];
	protected $guarded = [];
	protected $perPage = 8;
	protected $table = 'tareas';

	public function actividades()
	{
		return $this->hasMany('Actividad');
	}

	public function sprint()
	{
		return $this->belongsTo('Sprint');
	}
}