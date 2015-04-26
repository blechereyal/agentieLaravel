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

Route::get('/', 'DestinationsController@index');
Route::get('/home', 'DestinationsController@index');

Route::get('/contact', [
    'as' => 'contact', 'uses' => 'HomeController@contact'
]);
Route::post('/contact', [
    'as' => 'contact_post', 'uses' => 'HomeController@contactPost'
]);
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::model('destinations', 'Destination');
Route::model('offers', 'Offer');
Route::model('offer_subscriptions', 'OfferSubscription');

Route::resource('destinations', 'DestinationsController');
Route::resource('destinations.offers', 'OffersController');
Route::resource('destinations.offers.subscriptions', 'OfferSubscriptionsController');

Route::bind('destinations', function($value, $route) {
	return \App\Destination::whereSlug($value)->first();
});
Route::bind('offers', function($value, $route) {
	return \App\Offer::whereSlug($value)->first();
});
