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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faq', 'HomeController@faq')->name('faq');

//Department Purchasing
Route::get('/invoice', 'Purchasing@invoice')->name('invoice');
Route::get('/master-item', 'Purchasing@item')->name('master_item');
Route::get('/master-supplier', 'Purchasing@msupplier')->name('master_supplier');
Route::get('/supplier', 'Purchasing@supplier')->name('supplier');
Route::get('/print-invoice', 'Purchasing@invoiceout')->name('invoiceout');
Route::get('/spp', 'Purchasing@spp')->name('spp');
Route::get('/buat-spp', 'Purchasing@addspp')->name('addspp');
Route::get('/spp-keluar', 'Purchasing@sppout')->name('sppout');
Route::get('/faktur', 'Purchasing@faktur')->name('faktur');

//Ruang Training
Route::get('/user', 'UserController@index')->name('user_index');
Route::get('/user_create', 'UserController@create')->name('user_create');
Route::get('/user_edit/{id}', 'UserController@edit')->name('user_edit');
Route::get('/user_show/{id}', 'UserController@show')->name('user_show');
Route::post('/user_store', 'UserController@store')->name('user_store');
Route::post('/user_update/{id}', 'UserController@update')->name('user_update');
Route::post('/user_destroy/{id}', 'UserController@destroy')->name('user_destroy');

//Master KaryawanController
Route::get('/karyawan', 'KaryawanController@index')->name('karyawan_index');
Route::get('/karyawan_create', 'KaryawanController@create')->name('karyawan_create');
Route::get('/karyawan_edit/{id}', 'KaryawanController@edit')->name('karyawan_edit');
Route::get('/karyawan_show/{id}', 'KaryawanController@show')->name('karyawan_show');
Route::post('/karyawan_store', 'KaryawanController@store')->name('karyawan_store');
Route::post('/karyawan_update/{id}', 'KaryawanController@update')->name('karyawan_update');

//Ruang Training
Route::get('/akun', 'master/akunController@index')->name('akun_index');
Route::get('/akun_create', 'master/akunController@create')->name('akun_create');
Route::get('/akun_edit/{id}', 'master/akunController@edit')->name('akun_edit');
Route::get('/akun_show/{id}', 'master/akunController@show')->name('akun_show');
Route::post('/akun_store', 'master/akunController@store')->name('akun_store');
Route::post('/akun_update/{id}', 'master/akunController@update')->name('akun_update');
Route::post('/akun_destroy/{id}', 'master/akunController@destroy')->name('akun_destroy');

//Master DepartemenController
Route::get('/departemen', 'DepartemenController@index')->name('departemen_index');
Route::get('/departemen_create', 'DepartemenController@create')->name('departemen_create');
Route::get('/departemen_edit/{id}', 'DepartemenController@edit')->name('departemen_edit');
Route::get('/departemen_show/{id}', 'DepartemenController@show')->name('departemen_show');
Route::post('/departemen_store', 'DepartemenController@store')->name('departemen_store');
Route::post('/departemen_update/{id}', 'DepartemenController@update')->name('departemen_update');
Route::post('/departemen_destroy/{id}', 'DepartemenController@destroy')->name('departemen_destroy');

// PEMBUKAAN DIVISI PRODUKSI -------------------------------------------------------------------------

Route::get('/produk', 'ProdukController@index')->name('master_produk');
Route::get('/produk/tambah', 'ProdukController@create');
Route::post('/produk', 'ProdukController@store')->name('master_produk_store');
Route::get('/produk/{produk}', 'ProdukController@show');
Route::delete('/produk/{produk}', 'ProdukController@destroy');
Route::get('/produk/{produk}/edit', 'ProdukController@edit');
Route::patch('/produk/{produk}', 'ProdukController@update');

Route::get('getdataproduk',[ 
    'uses' => 'ProdukController@getdataproduk',
    'as' => 'ajax.get.data.produk'
]);

Route::get('/item', 'ItemController@index')->name('master_item');
Route::get('/item/tambah', 'ItemController@create');
Route::post('/item', 'ItemController@store')->name('master_item_store');
Route::get('/item/{item}', 'ItemController@show');
Route::delete('/item/{item}', 'ItemController@destroy');
Route::get('/item/{item}/edit', 'ItemController@edit');
Route::patch('/item/{item}', 'ItemController@update');

Route::get('getdataitem',[ 
    'uses' => 'ItemController@getdataitem',
    'as' => 'ajax.get.data.item'
]);

Route::get('/downtime', 'DowntimeController@index')->name('master_item');
Route::get('/carimesin', 'DowntimeController@loadData');
Route::get('/downtime/tambah', 'DowntimeController@create');
Route::post('/downtime', 'DowntimeController@store')->name('master_item_store');
Route::get('/downtime/{item}', 'DowntimeController@show');
Route::delete('/downtime/{item}', 'DowntimeController@destroy');
Route::get('/downtime/{item}/edit', 'DowntimeController@edit');
Route::patch('/downtime/{item}', 'DowntimeController@update');

Route::get('getdatadowntime',[ 
    'uses' => 'DowntimeController@getdatadowntime',
    'as' => 'ajax.get.data.downtime'
]);

// PENUTUPAN DIVISI PRODUKSI -------------------------------------------------------------------------