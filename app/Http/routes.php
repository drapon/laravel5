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

Route::get('/', 'ArticlesController@getIndex');
Route::controller('articles', 'ArticlesController');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Route::get('venues', 'VenuesController@getIndex');
// Route::controller('venues', 'VenuesController');

// Route::get('/tweet', function(){
// 		return $array = Twitter::query('search/tweets', 'GET', array('q' => 'イベント', 'count' => 1, 'result_type' => 'recent' , 'format' => 'json'));
// });