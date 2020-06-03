<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', 'TodosController@show')
    ->middleware('auth');
Route::post('/users/{user}/todos', 'TodosController@store');
Route::get('/todos/{todo}/edit', 'TodosController@edit');
Route::post('/todos/{todo}/update', 'TodosController@update');
Route::post('/todos/{todo}/destroy', 'TodosController@destroy');
Route::post('/todos/{todo}/status', 'TodosController@status');
Route::get('/users/index', 'UsersController@index');
Route::post('/users/search', 'UsersController@search');
