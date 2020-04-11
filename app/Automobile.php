<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* Provides data fields and methods to create a PHP data-type representing an Automobile resource in a PHP application.
* @author SENG Force One Team
*
*/
class Automobile extends Model
{
	/**
	* The name of the table that corresponds to this Automobile
	* @var string
	*/
	protected $table = "automobiles";

	/**
	* The fillable table attributes of this User
	* @var array(string)
	*/
	protected $fillable = [
		'brand',
		'model',
		'year',
	];

	/**
	* A flag to enable timestamps for Community creations or updates
	* @var array(string)
	*/
	public $timestamps = true;

	public function colorPalette() {
		return $this->hasOne('\App\ColorPalette', 'automobile_id', 'id');
	}

	public function desiredAutomobiles() {
		$this->hasMany('\App\DesiredAutomobile', 'automobile_id', 'id');
	}
}
