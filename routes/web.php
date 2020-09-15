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

Route::get('/', "QuestionsController@index") -> name('index');

Route::get('/create', "QuestionsController@create") -> name('create');
Route::post('/store', "QuestionsController@store") -> name('store');

Route::get('/show', "QuestionsController@show") -> name('show');
