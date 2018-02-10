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
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->group(['namespace'=>'App\Http\Controllers'], function ($api) {
		$api->get('/user', 'HomeController@user');
		$api->get('/admin', 'HomeController@admin');
		$api->get('/common', 'HomeController@common');
	});
});