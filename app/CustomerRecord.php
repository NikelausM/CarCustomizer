<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DesiredAutomobile;

/**
* Provides data fields and methods to create a PHP data-type representing a Customer Record resource in a PHP application.
* @author SENG Force One Team
*
*/
class CustomerRecord extends User
{
	/**
	* The name of the table that corresponds to this User
	* @var string
	*/
	protected $table = "customer_records";

	/**
	* The fillable table attributes of this User
	* @var array(string)
	*/
	protected $fillable = [
		'name',
		'gender',
		'billingAddress',
		'telephoneDuringDay',
		'telephoneDuringEvening',
		'email',
		'paymentStatus',
		'designatedSalesPerson',
		'user_id',
	];

	/**
	* A flag to enable timestamps for Community creations or updates
	* @var array(string)
	*/
	public $timestamps = true;

	/**
	* Retrieve the Following userable relationship corresponding to this Customer Record
	*
	* @return \App\Following
	*/
	public function user() {
		return $this->morphOne('App\User', 'userable');
	}

	public function previouslyOwnedAutomobiles() {

	}

	public function desiredAutomobile() {
		return $this->hasOne('\App\DesiredAutomobile', 'customer_record_id', 'id');
	}

	public function visitHistory() {

	}

}
