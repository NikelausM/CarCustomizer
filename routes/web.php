<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home page accessible to anyone
Route::get('/', [ 'uses' => 'IndexController@getIndex', 'as' => 'index']);
// User routes accessible to anyone
Route::get('user/', ['uses' => 'UserController@index', 'as' => 'user.index']);
Route::post('user/register', ['uses' => 'UserController@store', 'as' => 'user.store']);
Route::post('user/login', ['uses' => 'UserLoginController@login', 'as' => 'user.postLogin']);

// User routes accessible to logged-in users
Route::prefix('user/')->middleware('auth')->group(function () {

	Route::get('logout', ['uses' => 'UserLoginController@logout', 'as' => 'user.logout']);

	Route::prefix('{user}')->middleware('auth')->group(function () {

		Route::get('/', ['uses' => 'UserController@show', 'as' => 'user.show']);

		Route::post('/', ['uses' => 'UserController@update', 'as' => 'user.update']);
		
	});
});


Route::resource('DesiredAutomobile', 'DesiredAutomobileController')->middleware('auth');
Route::prefix("/DesiredAutomobiles")->middleware('auth')->group(function () {
	Route::prefix("/{DesiredAutomobile}")->group(function () {
		Route::post('/updateExteriorColor', ['uses' => 'DesiredAutomobileController@updateExteriorColor', 'as' => 'DesiredAutomobiles.updateExteriorColor']);
		Route::post('/updateInteriorColor', ['uses' => 'DesiredAutomobileController@updateInteriorColor', 'as' => 'DesiredAutomobiles.updateInteriorColor']);
	});
});
