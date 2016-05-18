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

Route::get('/', 'TodoListController@index');
Route::get('/todos', 'TodoListController@index');
Route::get('/todos/{id}', 'TodoListController@show');
Route::resource('todos', 'TodoListController');
Route::get('/db', function(){
  $result =  DB::table('bar')->where('firstName', 'Jon')->first();
  return $result->firstName;
});
