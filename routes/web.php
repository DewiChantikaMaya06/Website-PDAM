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
Route::get('/detailberita/{id}', 'GuestController@ShowBerita');

//Manage Authentification
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

//Manage Data Pengaduan
Route::get('/pengaduan/add', 'PengaduanController@add');
Route::post('/pengaduan/add', 'PengaduanController@store');

//Manage Data Pendaftaran Sambung Kilat
Route::get('/pendaftaran/tambah', 'PendaftaranController@tambah');
Route::post('/pendaftaran/tambah', 'PendaftaranController@store');

//Manage data kritik dan saran
Route::post('/saran/add', 'SaranController@store');

//Manage Data cek tagihan
Route::post('/cek_tagihan', 'TagihanController@store');
Route::get('/tagihan', 'TagihanController@index');
Route::get('/tagihan/{id}', 'TagihanController@show');

//Manage Data Baliknama
Route::get('/baliknama/add', 'BaliknamaController@add');
Route::post('/baliknama/add', 'BaliknamaController@store');

//Data Midleware
Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', 'DashboardController@index');

    //Manage Data siswa
    Route::get('/siswa', 'SiswaController@index');
    Route::post('/siswa/create', 'SiswaController@create');
    Route::get('/siswa/{id}/edit', 'SiswaController@edit');
    Route::post('/siswa/{id}/update', 'SiswaController@update');
    Route::get('/siswa/{id}/delete', 'SiswaController@delete');

    //Manage Data Tarif Air
    Route::get('/tarif', 'TarifController@index');
    Route::get('/tarif/detail/{id}', 'TarifController@detail');
    Route::get('/tarif/backup', 'TarifController@backup');
    Route::get('/tarif/add', 'TarifController@add');
    Route::post('/tarif/add', 'TarifController@store');
    Route::get('/tarif/{id}', 'TarifController@edit');
    Route::put('/tarif/{id}', 'TarifController@update');
    Route::delete('/tarif/delete/{id}', 'TarifController@destroy');
    Route::get('/tarif/restore/{id}', 'TarifController@restore');
    Route::get('/tarif/deletePermanen/{id}', 'TarifController@deletePermanen');

    //Manage Data Galeri Kegiatan
    Route::get('/kegiatan', 'KegiatanController@index');
    Route::get('/kegiatan/detail/{id}', 'KegiatanController@detail');
    Route::get('/kegiatan/add', 'KegiatanController@add');
    Route::post('/kegiatan/add', 'KegiatanController@store');
    Route::get('/kegiatan/{id}', 'KegiatanController@edit');
    Route::put('/kegiatan/{id}', 'KegiatanController@update');
    Route::delete('/kegiatan/delete/{id}', 'KegiatanController@destroy');

    //Manage Data Berita
    Route::get('/berita', 'BeritaController@index');
    Route::get('/berita/add', 'BeritaController@add');
    Route::post('/berita/add', 'BeritaController@store');
    Route::get('/berita/{id}', 'BeritaController@edit');
    Route::put('/berita/{id}', 'BeritaController@update');
    Route::delete('/berita/delete/{id}', 'BeritaController@destroy');

    //Manage Data info
    Route::get('/info', 'InfoController@index');
    Route::get('/info/add', 'InfoController@add');
    Route::post('/info/add', 'InfoController@store');
    Route::get('/info/{id}', 'InfoController@edit');
    Route::put('/info/{id}', 'InfoController@update');

    //Manage Data pengaduan
    Route::get('/pengaduan', 'PengaduanController@index');
    Route::get('/pengaduan/{id}', 'PengaduanController@edit');
    Route::put('/pengaduan/{id}', 'PengaduanController@update');
    Route::get('/detail/pengaduan/{id}', 'PengaduanController@show');

    //Manage Data Pendaftaran 
    Route::get('/pendaftaran', 'PendaftaranController@index');
    Route::get('/detail/pendaftaran/{id}', 'PendaftaranController@show');
    Route::get('/pendaftaran/backup', 'PendaftaranController@backup');
    Route::get('/pendaftaran/{id}', 'PendaftaranController@edit');
    Route::put('/pendaftaran/{id}', 'PendaftaranController@update');
    Route::delete('/pendaftaran/delete/{id}', 'PendaftaranController@destroy');
    Route::get('/pendaftaran/restore/{id}', 'PendaftaranController@restore');
    Route::get('/pendaftaran/deletePermanen/{id}', 'PendaftaranController@deletePermanen');


    //Manage Data Balik nama
    Route::get('/baliknama', 'BaliknamaController@index');
    Route::get('/baliknama/{id}', 'BaliknamaController@edit');
    Route::put('/baliknama/{id}', 'BaliknamaController@update');
    Route::get('/detail/baliknama/{id}', 'BaliknamaController@show');
    Route::delete('/baliknama/delete/{id}', 'BaliknamaController@destroy');

    //Manage Data Kritik dan Saran
    Route::get('/saran', 'SaranController@index');
    Route::get('/saran/{id}', 'SaranController@edit');
    Route::put('/saran/{id}', 'SaranController@update');
    Route::get('/detail/saran/{id}', 'SaranController@show');

    //Manage Data Tagihan
    Route::get('/pelanggan','PelangganController@index');
    Route::get('/pelanggan/add','PelangganController@add');
    Route::post('/pelanggan/add','PelangganController@store');
    Route::get('/pelanggan/detail/{id}','PelangganController@show');
});


//Manage Template Guest

// Route::get('/baliknama/add', function () {
//     return view('guest.baliknama');
// });
Route::get('/struktur', function () {
    return view('guest.struktur');
});
Route::get('/about', function () {
    return view('guest.about');
});
