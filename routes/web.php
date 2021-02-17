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

Route::get('/', function () {
    return view('welcome');
});
Route::get('employer', 'EmployerController@index');
Route::get('employer', 'EmployerController@create');
Route::post('employer', 'EmployerController@store');
Route::get('employer', 'EmployerController@show');
Route::post('employer', 'EmployerController@update');
Route::post('employer', 'EmployerController@destroy');


// Use Like this 
Route::resource('employer', 'EmployerController');