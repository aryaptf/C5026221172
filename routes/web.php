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
