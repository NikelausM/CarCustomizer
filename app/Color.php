<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
  /**
	* The name of the table that corresponds to this Color
	* @var string
	*/
	protected $table = "colors";

	/**
	* The fillable table attributes of this User
	* @var array(string)
	*/
	protected $fillable = [
		'name',
		'hex',
	];
}
