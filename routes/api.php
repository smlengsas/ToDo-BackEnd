<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('getTasks', 'TasksController@index');
Route::post('storeTask', 'TasksController@store');
Route::get('showTask/{id}', 'TasksController@show');
Route::get('getFirst', 'TasksController@getTask');
Route::get('destroyOne', 'TasksController@destroyOne');

Route::any('{path?}', 'MainController@index')->where("path", ".+");
