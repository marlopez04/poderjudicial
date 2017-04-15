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

//cambiado

Response::macro('csv', function($data, $filename = 'data.csv', $status = 200, $delimiter = ";", $linebreak = "\n", $headers = array())
{
    return Response::stream(function () use ($data, $delimiter, $linebreak) {

      foreach ($data as $row) {
          $keys = array(); $values = array();
          $i = (isset($i)) ? $i+1 : 0;
          foreach ($row as $k => $v) {
              if (!$i) $keys[] = is_string($k) ? '"' . str_replace('"', '""', $k) . '"' : $k;
              $values[] = is_string($v) ? '"' . str_replace('"', '""', $v) . '"' : $v;
          }
          if (count($keys) > 0) echo implode($delimiter, $keys) . $linebreak;
          if (count($values) > 0) echo implode($delimiter, $values) . $linebreak;

      }
    }, 200, array_merge(array(
        'Content-type' => 'application/csv',
        'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
        'Content-Description' => 'File Transfer',
        'Content-type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename=' . $filename,
        'Expires' => '0',
        'Pragma' => 'public',
    ), $headers));
});

Route::get('csv', function () {
  $users = App\User::all();
  dd($users);
  return Response::csv($users);
});

//cambiado

Route::group(['prefix' => '/', 'middleware' => 'auth'], function(){

	Route::resource('/', 'FrontController');

	Route::get('/', [
		'as' => 'front.index',
		'uses' => 'FrontController@index'
	]);


/*
	Route::get('/',['as' => 'front.index', function () {
    	return view('front.index');
	}]);
*/

	Route::resource('notificaciones', 'NotificacionesController');
	Route::get('notificaciones/{id}/destroy',[
		'uses' => 'NotificacionesController@destroy',
		'as'   => 'front.notificaciones.destroy'
	]);


	Route::resource('notificacioncomentarios', 'NotificacionComentariosController');
	Route::get('notificacioncomentarios/{id}/destroy',[
		'uses' => 'NotificacionComentariosController@destroy',
		'as'   => 'front.notificacioncomentarios.destroy'
	]);

	Route::resource('noticias', 'NoticiasController');
	Route::get('noticias/{id}/destroy',[
		'uses' => 'NoticiasController@destroy',
		'as'   => 'front.noticias.destroy'
	]);

	Route::resource('noticiacomentarios', 'NoticiaComentariosController');
	Route::get('noticiacomentarios/{id}/destroy',[
		'uses' => 'NoticiaComentariosController@destroy',
		'as'   => 'front.noticiacomentarios.destroy'
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
