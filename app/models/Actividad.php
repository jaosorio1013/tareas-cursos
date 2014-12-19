<?php

class Actividad extends \Eloquent {
	protected $fillable = [];
	protected $guarded = [];
	protected $perPage = 8;
	protected $table = 'actividades';

	public function category()
	{
		return $this->belongsTo('Tarea');
	}

}