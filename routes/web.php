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



//Manage Data Guest
Route::get('/', 'GuestController@index');
Route::get('/detailfoto/{id}', 'GuestController@show');

//Manage Authentification
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

//Data Midleware
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
    Route::get('/tarif/detail/{id}', 'TarifController@detail');
    Route::get('/tarif/add', 'TarifController@add');
    Route::post('/tarif/add', 'TarifController@store');
    Route::get('/tarif/{id}', 'TarifController@edit');
    Route::put('/tarif/{id}', 'TarifController@update');
    Route::delete('/deleteTarif/{id}', 'TarifController@destroy');

    //Manage Data Galeri Kegiatan
    Route::get('/kegiatan', 'KegiatanController@index');
    Route::get('/kegiatan/detail/{id}', 'KegiatanController@detail');
    Route::get('/kegiatan/add', 'KegiatanController@add');
    Route::post('/kegiatan/add', 'KegiatanController@store');
    Route::get('/kegiatan/{id}', 'KegiatanController@edit');
    Route::put('/kegiatan/{id}', 'KegiatanController@update');
    Route::delete('/deleteKegiatan/{id}', 'KegiatanController@destroy');
});



//Manage Template Guest
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
Route::get('/detailberita', function () {
    return view('guest.detailberita');
});
Route::get('/struktur', function () {
    return view('guest.struktur');
});
Route::get('/about', function () {
    return view('guest.about');
});
