<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorPalette extends Model
{
  /**
	* The name of the table that corresponds to this Color Palette
	* @var string
	*/
	protected $table = "color_palettes";

	/**
	* The fillable table attributes of this User
	* @var array(string)
	*/
	protected $fillable = [
		'automobileId',
	];

	public function colorPalette() {
		return $this->belongsTo('App\Automobile', 'automobile_id', 'id');
	}

	public function exteriorColors() {
		return $this->hasMany('\App\ExteriorColor', 'color_palette_id', 'id');
	}

	public function interiorColors() {
		return $this->hasMany('\App\InteriorColor', 'color_palette_id', 'id');
	}
}
