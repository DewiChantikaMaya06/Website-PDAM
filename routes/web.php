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