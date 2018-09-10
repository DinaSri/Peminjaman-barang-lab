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
Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']],
function (){
	Route::get('daftar','PeminjamanController@daftar')->name('daftar');
	Route::resource('/barang', 'BarangController');
	Route::resource('/user', 'UserController');
	Route::resource('/peminjaman', 'PeminjamanController');
	Route::resource('/pengembalian', 'PengembalianController');
	Route::get('export/barang', [ 'as' => 'export.barang', 'uses' => 'BarangController@export' ]); 
Route::post('export/barang', [ 'as' => 'export.barang.post', 'uses' => 'BarangController@exportPost' ]);
	Route::get('export/pengembalian', [ 'as' => 'export.pengembalian', 'uses' => 'PengembalianController@export' ]);
	Route::post('export/pengembalian', [ 'as' => 'export.pengembalian.post', 'uses' => 'PengembalianController@exportPost' ]);
});
Route::group(['prefix'=>'member', 'middleware'=>['auth','role:member|admin']],
function(){
	Route::get('daftar','PeminjamanController@daftar')->name('daftar');
	Route::resource('/barang', 'BarangController');
	Route::resource('/peminjaman', 'PeminjamanController');
	Route::get('export','BarangController@daftar')->name('export');

 });
       
