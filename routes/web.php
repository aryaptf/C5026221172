<?php

use Illuminate\Support\Facades\Route;

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

Route::get('halo', function () {
    //bisa diisi program apa aja
    return "Halo apa kabar" ;
});

Route::get('halo2', function () {
    return "<h1>Halo apa kabar</h1>" ;
});

Route::get('blog', function () {
    return view('blog') ;
});

Route::get('linktree', function () {
    return view('tugas1') ;
});

Route::get('customization', function () {
    return view('tugas2') ;
});

Route::get('replikapage', function () {
    return view('tugas3') ;
});

Route::get('materi1', function () {
    return view('materi1') ;
});

Route::get('materi2', function () {
    return view('materi2') ;
});

Route::get('materi3', function () {
    return view('materi3') ;
});

Route::get('materi4', function () {
    return view('materi4') ;
});

Route::get('materi5', function () {
    return view('materi5') ;
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home') ;
});

Route::get('/blog/tentang', function () {
    return view('tentang') ;
});

Route::get('/blog/kontak', function () {
    return view('kontak') ;
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


//nilaikuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaikuliahController@indexnilai');
Route::get('/nilaikuliah/tambahnilai','App\Http\Controllers\NilaikuliahController@tambahnilai');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaikuliahController@store');

//keranjangbelanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

//televisi
Route::get('/televisi','App\Http\Controllers\TelevisiController@indextelevisi');
Route::get('/televisi/tambahtelevisi','App\Http\Controllers\TelevisiController@tambahtelevisi');
Route::post('/televisi/store','App\Http\Controllers\TelevisiController@store');
Route::get('/televisi/edittelevisi/{id}','App\Http\Controllers\TelevisiController@edittelevisi');
Route::post('/televisi/update','App\Http\Controllers\TelevisiController@update');
Route::get('/televisi/hapustelevisi/{id}','App\Http\Controllers\TelevisiController@hapustelevisi');

Route::get('/televisi/cari','App\Http\Controllers\TelevisiController@cari');
Route::get('/televisi/viewtelevisi/{id}','App\Http\Controllers\TelevisiController@viewtelevisi');
