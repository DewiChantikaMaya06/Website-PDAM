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
    return view('guest.index');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');


Route::group(['middleware' => 'auth'], function () {

    //Manage Data siswa
    Route::get('/siswa', 'SiswaController@index');
    Route::get('/dashboard', 'DashboardController@index');
    Route::post('/siswa/create', 'SiswaController@create');
    Route::get('/siswa/{id}/edit', 'SiswaController@edit');
    Route::post('/siswa/{id}/update', 'SiswaController@update');
    Route::get('/siswa/{id}/delete', 'SiswaController@delete');

    //Manage Data Tarif Air
    Route::get('/tarif', 'TarifController@index');
    Route::post('/tarif/create', 'TarifController@create');
});

Route::get('/pengaduan', function () {
    return view('guest.pengaduan');
});
Route::get('/pendaftaran', function () {
    return view('guest.pendaftaran');
});
Route::get('/tagihan', function () {
    return view('guest.tagihan');
});
Route::get('/baliknama', function () {
    return view('guest.baliknama');
});
Route::get('/detail', function () {
    return view('guest.detailfoto');
});
Route::get('/detailberita', function () {
    return view('guest.detailberita');
});
Route::get('/struktur', function () {
    return view('guest.struktur');
});
