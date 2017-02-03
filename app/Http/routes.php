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

	Route::resource('notificaciones', 'NotificacionesController');
	Route::get('notificaciones/{id}/destroy',[
		'uses' => 'NotificacionesController@destroy',
		'as'   => 'front.notificaciones.destroy'
	]);

	Route::resource('noticias', 'NoticiasController');
	Route::get('noticias/{id}/destroy',[
		'uses' => 'NoticiasController@destroy',
		'as'   => 'front.noticias.destroy'
	]);

	Route::resource('tareas', 'TareasController');
	Route::get('tareas/{id}/destroy',[
		'uses' => 'TareasController@destroy',
		'as'   => 'front.tareas.destroy'
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
