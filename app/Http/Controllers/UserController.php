<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\User;
use Auth;
use Session;
/**
* Provides data fields and methods to manipulate a PHP data-type representing a User in a PHP application.
* @author Nozy team
*
*/
class UserController extends Controller
{
	/*
	* only authenticated user with user guard
	* can access this controller.
	*/
	public function __construct()
	{
		Log::info('UserController Constructor middleware being called!');
		$this->middleware('auth')->except(['store','storeSuper']);
	}

	// Get user of current authenticated profile
	public function index() {
		Log::info('Trying to UserController.index!');
		Log::info('Trying to get user!');
		$user = Auth::user(); // Get Authenticated profile
		return redirect()->route('user.show', $user);
	}

	/**
  * Call the super class store function of a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  private function storeSuper(Request $request) {
    Log::info('Calling Profile::store()!');
    $profile = new ProfileController();
    $request->unique_id--;
    $profile = $profile->store($request);
    $request->unique_id++;
    return $profile;
  }

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request) {

		# Call parent store function (basically a model constructor)
		$profile = $this->storeSuper($request);
    if ($profile instanceOf ProfileController) {
      Log::info("storeValidator: ".$profile->storeErrors);
      return redirect()->back()->with('code',true)->withErrors($profile->storeValidator, $profile->storeErrors);
    }

		# Validate form
		Log::info('Validating user registration info!');
    $validator = Validator::make($request->all(), [
			'email' => 'required|email',
			'password' => 'required|min:3',
			'age' => 'required|numeric',
		]);

		// If required fields aren't flled
		if ($validator->fails()) {
			Log::info('Failed to create user');
			Session::flash("store_user_error_".$request->unique_id, "unable to create user at the moment\r\nplease try again...");
			$profile->delete();
			return redirect()->back()->with('code',true)->withErrors($validator,'storeUserErrors');
		}

		# Create new user
		Log::info('Creating new user!');
		$user = new User;
		$user->email = $request->email;
		$user->age = $request->age;
		$user->profile_id = $profile->id;
		$user->save();

		Log::info('Created user, trying to login!');

		$credentials = array('username' => $request->username, 'password' => $request->password);

		if (Auth::attempt($credentials)) {
			Log::info('Authentication passed!');
			// Authentication passed
			return redirect('user/');
		}
		else {
			Log::info('Authentication failed!');
			Session::flash ('message', 'Invalid Credentials , Please try again.');
			return redirect('/');
		}

	}

	/**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
	public function show($id) {

		// Retrieve user
		$user = \App\User::where('id', $id)->first();

		Log::info('Trying to getUserView!');
		Log::info('I went back to the user page!');
		return view('user.user', ['user' => $user, 'profile' => $user->profile]);
	}

	/**
  * Call the super class update function of a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  private function updateSuper(Request $request, $id) {
    Log::info('Calling Profile::update()!');
    $profile = new ProfileController();
    $request->unique_id--;
    $profile = $profile->update($request, $id);
    $request->unique_id++;
    return $profile;
  }

	// Update user info
	public function update(Request $request, $id) {
  	Log::info("start update_user_error_: ".json_encode($request->all()));
		// Retrieve user
		$user = \App\User::where('id', $id)->first();

		# Call parent update function (basically a model constructor)
		$profile = $this->updateSuper($request, $user->profile->id);
		if ($profile instanceOf ProfileController) {
			Log::info("updateValidator: ".$profile->updateErrors);
			return redirect()->back()->withErrors($profile->updateValidator, $profile->updateErrors);
		}

		# Validate user update
		Log::info('Validating user update info!');
    $validator = Validator::make($request->all(), [
			'email' => 'required|email',
			'age' => 'required|numeric',
		]);

		// If required fields aren't flled
		if ($validator->fails()) {
			Log::info('Failed to update user');
			Session::flash("update_user_error_".$request->unique_id, "unable to update user at the moment\r\nplease try again...");
      Log::info("end update_user_error_: ".$request->unique_id);
			return redirect()->back()->withErrors($validator,'updateUserErrors');
		}

		// Update other attributes
		$user->email = $request->email;
		$user->age = $request->age;
		$user->save();

		return redirect()->route('user.show', ['user' => $user]);
	}


}
