<?php

/*-------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

/*
 * home page, to display banners and recent news
 */
Route::get('/', 'HomeController@index');

/*
 * products page, to display series by default
 */
Route::get('products', 'SeriesController@index');
Route::get('series', 'SeriesController@index');
Route::get('series/{series_id}', 'SeriesController@show');
