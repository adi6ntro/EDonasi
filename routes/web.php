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

// Transaksi
Route::get('/transaksi', 'TransaksiController@index');
Route::get('/transaksi/cari', 'TransaksiController@cari');
Route::get('/trx_masuk/edit/{id}', 'TransaksiController@edit');
Route::post('/trx_masuk/update', 'TransaksiController@update');
Route::get('/trx_masuk/delete/{id}', 'TransaksiController@delete');

// Donatur
Route::get('/donatur', 'DonaturController@index');
Route::get('/donatur/cari', 'DonaturController@cari');
Route::get('/donatur/edit/{id}', 'DonaturController@edit');
Route::post('/donatur/update', 'DonaturController@update');
Route::get('/donatur/delete/{id}', 'DonaturController@delete');

// Koordinator
Route::get('/koordinator', 'KoordinatorController@index');
Route::get('/koordinator/cari', 'KoordinatorController@cari');
Route::get('/koordinator/edit/{id}', 'KoordinatorController@edit');
Route::post('/koordinator/update', 'KoordinatorController@update');
Route::get('/koordinator/delete/{id}', 'KoordinatorController@delete');

// Referensi Donasi
Route::get('/reff_donasi', 'ReffDonasiController@index');
Route::get('/reff_donasi/cari', 'ReffDonasiController@cari');
Route::get('/reff_donasi/edit/{id}', 'ReffDonasiController@edit');
Route::post('/reff_donasi/update', 'ReffDonasiController@update');
Route::get('/reff_donasi/delete/{id}', 'ReffDonasiController@delete');