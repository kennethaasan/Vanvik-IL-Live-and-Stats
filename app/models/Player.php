<?php

class Player extends Eloquent {

	public static $rules = array
	(
		'number' => 'required',
		'position' => 'required',
		'name' => 'required',
	);

	public function getFormattedBirthDateAttribute()
	{
		return date('d.m.Y', strtotime($this->getAttribute('birth_date')));
	}

	public function matches() 
	{
		return $this->hasMany('Match');
	}
}