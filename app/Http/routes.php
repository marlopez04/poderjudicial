<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => '/', 'middleware' => 'auth'], function(){

	Route::get('/',['as' => 'front.index', function () {
    	return view('front.index');
	}]);

});

Route::get('front/auth/login', [
	'uses' => 'Auth\AuthController@getLogin',
	'as'   => 'front.auth.login'
	]);

Route::post('front/auth/login', [
	'uses' => 'Auth\AuthController@postLogin',
	'as'   => 'front.auth.login'
	]);

Route::get('front/auth/logout', [
	'uses' => 'Auth\AuthController@getLogout',
	'as'   => 'front.auth.logout'
	]);
