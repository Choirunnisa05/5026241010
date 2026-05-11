<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\pegawaiDBController;

Route::get('/', function () {
    return view('index');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1> Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertemuan5', function () {
	return view('pertemuan5');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('workshop', function () {
	return view('workshop');
});

Route::get('news', function () {
	return view('news');
});

Route::get('responsive', function () {
	return view('responsive');
});

Route::get('5026241010', function () {
	return view('5026241010');
});

Route::get('intro', function () {
	return view('intro');
});

Route::get('makeover', function () {
	return view('makeover');
});

Route::get('dosen', [DosenController::class,'index']);

Route::get('biodata', [DosenController::class,'biodata']);

//crud
Route::get('/pegawai', [pegawaiDBController::class,'index']);

