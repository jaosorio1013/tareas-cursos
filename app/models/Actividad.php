<?php

class Actividad extends \Eloquent {
	protected $fillable = [];
	protected $guarded = [];
	protected $perPage = 8;
	protected $table = 'actividades';

	public function tarea()
	{
		return $this->belongsTo('Tarea');
	}

}