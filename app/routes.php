<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.acasa');
});
Route::get('despre', function(){
	return View::make('pages.despre');
});
Route::get('proiecte', function(){
	return View::make('pages.proiecte');
});
Route::get('contact', function(){
	return View::make('pages.contact');
});
