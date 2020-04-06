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

//Department Purchasing
Route::get('/invoice', 'Purchasing@invoice')->name('invoice');
Route::get('/master-item', 'Purchasing@item')->name('master_item');
Route::get('/master-supplier', 'Purchasing@msupplier')->name('master_supplier');
Route::get('/supplier', 'Purchasing@supplier')->name('supplier');
Route::get('/print-invoice', 'Purchasing@invoiceout')->name('invoiceout');
Route::get('/pembelian', 'Purchasing@buy')->name('buy');

//Ruang Training
Route::get('/user', 'UserController@index')->name('user_index');
Route::get('/user_create', 'UserController@create')->name('user_create');
Route::get('/user_edit/{id}', 'UserController@edit')->name('user_edit');
Route::get('/user_show/{id}', 'UserController@show')->name('user_show');
Route::post('/user_store', 'UserController@store')->name('user_store');
Route::post('/user_update/{id}', 'UserController@update')->name('user_update');
Route::post('/user_destroy/{id}', 'UserController@destroy')->name('user_destroy');

//Ruang Training
Route::get('/akun', 'master/akunController@index')->name('akun_index');
Route::get('/akun_create', 'master/akunController@create')->name('akun_create');
Route::get('/akun_edit/{id}', 'master/akunController@edit')->name('akun_edit');
Route::get('/akun_show/{id}', 'master/akunController@show')->name('akun_show');
Route::post('/akun_store', 'master/akunController@store')->name('akun_store');
Route::post('/akun_update/{id}', 'master/akunController@update')->name('akun_update');
Route::post('/akun_destroy/{id}', 'master/akunController@destroy')->name('akun_destroy');
