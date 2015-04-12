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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::model('destinations', 'Destination');
Route::model('offers', 'Offer');

Route::resource('destinations', 'DestinationsController');
// Route::resource('offers', 'OffersController');
Route::resource('destinations.offers', 'OffersController');

Route::bind('destinations', function($value, $route) {
	return \App\Destination::whereSlug($value)->first();
});
Route::bind('offers', function($value, $route) {
	return \App\Offer::whereSlug($value)->first();
});
