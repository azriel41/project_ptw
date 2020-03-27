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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Ruang Training
Route::get('/user', 'UserController@index')->name('user_index');
Route::get('/user_create', 'UserController@create')->name('user_create');
Route::get('/user_edit/{id}', 'UserController@edit')->name('user_edit');
Route::get('/user_show/{id}', 'UserController@show')->name('user_show');
Route::post('/user_store', 'UserController@store')->name('user_store');
Route::post('/user_update/{id}', 'UserController@update')->name('user_update');
Route::post('/user_destroy/{id}', 'UserController@destroy')->name('user_destroy');

//Departemen
Route::get('/departemen', 'DepartemenController@index')->name('departemen_index');
Route::get('/departemen_create', 'DepartemenController@create')->name('departemen_create');
Route::get('/departemen_edit/{id}', 'DepartemenController@edit')->name('departemen_edit');
Route::get('/departemen_show/{id}', 'DepartemenController@show')->name('departemen_show');
Route::post('/departemen_save', 'DepartemenController@save')->name('departemen_save');
Route::post('/departemen_update/{id}', 'DepartemenController@update')->name('departemen_update');
Route::post('/departemen_destroy/{id}', 'DepartemenController@destroy')->name('departemen_destroy');