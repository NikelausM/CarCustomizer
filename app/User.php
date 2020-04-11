<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
* Provides data fields and methods to create a PHP data-type representing a User resource in a PHP application.
* @author Nozy team
*
*/
class User extends Authenticatable
{
	/**
	* The name of the table that corresponds to this User
	* @var string
	*/
	protected $table = "users";

	/**
	* The fillable table attributes of this User
	* @var array(string)
	*/
	protected $fillable = [
		'username',
		'password',
		'userable_id',
		'userable_type',
	];

	/**
	* A flag to enable timestamps for Community creations or updates
	* @var array(string)
	*/
	public $timestamps = true;

	/**
	* Retrieve the password of this Profile
	*
	* @return string
	*/
	public function getAuthPassword() {
		return bcrypt($this->password);
	}

	/**
	* Retrieve the subclass instance that this super class corresponds to
	*
	* @return \App\User
	*/
	public function userable() {
		return $this->morphTo();
	}

}
