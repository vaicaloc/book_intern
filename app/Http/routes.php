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

Route::get('/', function (){return view('welcome');});

Route::get('/test',function(){return view('test');});

Route::get('/demo', 'pagedemo@test');

Route::get('/hello/{name?}', 'HelloController@test');

Route::get('/operator','OperatorController@operate');
Route::get('greeting/{user?}', 'GreetingController@index');
Route::resource('books','BookController');

