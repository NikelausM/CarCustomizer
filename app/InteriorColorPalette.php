<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InteriorColorPalette extends Model
{
  /**
	* The name of the table that corresponds to this Exterior Color Palette
	* @var string
	*/
	protected $table = "interior_color_palettes";

	/**
	* The fillable table attributes of this User
	* @var array(string)
	*/
	protected $fillable = [
		'url',
		'colorId',
		'colorPaletteId',
	];

	/**
	* A flag to enable timestamps
	* @var array(string)
	*/
	public $timestamps = true;
}
