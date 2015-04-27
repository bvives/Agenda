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

Route::get('/', 'CitasController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::model('contactes', 'Contacte');
Route::model('citas', 'Cita');

Route::post('citas/{citas}/addContactes', 'CitasController@addContactes($cita');

Route::bind('contactes', function($value, $route) {
	return App\Contacte::whereSlug($value)->first();
});
Route::bind('citas', function($value, $route) {
	return App\Cita::whereSlug($value)->first();
});

Route::resource('citas', 'CitasController');
Route::resource('contactes', 'ContactesController');

