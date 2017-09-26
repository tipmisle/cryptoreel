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

Route::get('/', [
	'as' => 'landing',
	'uses' => 'LandingController@landing'
]);

Route::get('home', [
	'as' => 'home',
	'uses' => 'HomeController@home'
]);

Auth::routes();


Route::get('populate', [
	'as' => 'populate',
	'uses' => 'CoinController@populate'
]);


// USER APi

Route::get('api/user/coins', [
	'as' => 'myCoins',
	'uses' => 'UserController@myCoins'
]);




// COIN API

Route::get('api/coin/{name}', [
	'as' => 'coinInfo',
	'uses' => 'CoinController@coinInfo'
]);

