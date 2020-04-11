<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* Provides data fields and methods to create a PHP data-type representing an Automobile resource in a PHP application.
* @author SENG Force One Team
*
*/
class DesiredAutomobile extends Model
{
	/**
	* The name of the table that corresponds to this User
	* @var string
	*/
	protected $table = "desired_automobiles";

	/**
	* The fillable table attributes of this User
	* @var array(string)
	*/
	protected $fillable = [
		'exteriorColorId',
		'interiorColorId',
		'listedSalePrice',
		'actualSalePrice',
		'discount',
		'discountRationale',
		'automobileId',
		'customerRecordId'
	];

	/**
	* A flag to enable timestamps for Community creations or updates
	* @var array(string)
	*/
	public $timestamps = true;

	public function exteriorColor() {
		return $this->hasOne('\App\ExteriorColor', 'id', 'exterior_color_id');
	}

	public function interiorColor() {
		return $this->hasOne('\App\InteriorColor', 'id', 'interior_color_id');
	}

	public function automobile() {
		return $this->belongsTo('App\Automobile', 'automobile_id', 'id');
	}
}
