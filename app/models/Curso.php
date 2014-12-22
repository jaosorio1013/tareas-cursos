<?php

class Curso extends \Eloquent {
	protected $fillable = ['nombre'];

	public function sprints()
	{
		return $this->hasMany('Sprint');
	}

}