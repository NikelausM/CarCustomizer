<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorPalette extends Model
{
  /**
	* The name of the table that corresponds to this Automobile
	* @var string
	*/
	protected $table = "color_palettes";

	/**
	* The fillable table attributes of this User
	* @var array(string)
	*/
	protected $fillable = [
		'color',
		'automobile_id',
	];
}
