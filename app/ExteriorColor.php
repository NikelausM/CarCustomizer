<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExteriorColor extends Model
{
  /**
	* The name of the table that corresponds to this Exterior Color
	* @var string
	*/
	protected $table = "exterior_colors";

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

	public function color() {
		return $this->belongsTo('\App\Color', 'color_id', 'id');
	}

	public function colorPalette() {
		return $this->belongsTo('App\Palette', 'color_palette_id', 'id');
	}

}
