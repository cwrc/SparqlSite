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

Route::get('/', 'IndexController@index');


Route::match(['get', 'post'], 'sparql', 'IndexController@sparql');

Route::get('/vizchallenge', function() {
	return redirect('/releasenotes');
});

Route::get('/releasenotes', function() {
	return view('dataset');
});
