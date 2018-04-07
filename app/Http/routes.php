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

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', 'TodosController@index');
Route::post('todos', 'TodosController@store');
Route::get('todos/{id}', 'TodosController@show');
Route::put('todos/{id}', 'TodosController@update');
Route::delete('todos/{id}', 'TodosController@destroy');
