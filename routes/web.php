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

Route::get('blogs','blogController@index');
Route::get('blog/create', 'blogController@create');
Route::post('blogs', 'blogController@store');
Route::get('blog/edit/{id}', 'blogController@edit');
Route::put('blogs/{id}', 'blogController@update');

