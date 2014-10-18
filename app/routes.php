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

/*Route::get('/', function()
{
	return View::make('hello');
});*/

Route::get('/', function()
{
	return View::make('polls.generate');
});

Route::get('generate_options/{class}', function($class){
	$data["class"] = $class;
	return View::make('polls.generate_options',$data);
});

Route::get('template', function($class)
{
	
	return View::make('template.html');
});