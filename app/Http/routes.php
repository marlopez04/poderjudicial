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

	Route::resource('users','UsersController');

	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as'   => 'admin.users.destroy'
	]);

	Route::get('/',['as' => 'admin.index', function () {
    	return view('admin.index');
	}]);

	Route::resource('insumos', 'InsumosController');
	Route::get('insumos/{id}/destroy',[
		'uses' => 'InsumosController@destroy',
		'as'   => 'admin.insumos.destroy'
	]);

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
