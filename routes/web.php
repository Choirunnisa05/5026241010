<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\pegawaiDBController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
// jangan di replace file nya , copy paste kan perintahnya
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiKuliahController;

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

//crud pertemuan 11
Route::get('/pegawai', [pegawaiDBController::class,'index']);
Route::get('/pegawai/tambah', [pegawaiDBController::class,'tambah']);
Route::post('/pegawai/store', [pegawaiDBController::class,'store']);
Route::get('/pegawai/edit/{id}', [pegawaiDBController::class,'edit']);
Route::post('/pegawai/update', [pegawaiDBController::class,'update']);
Route::get('/pegawai/hapus/{id}', [pegawaiDBController::class,'hapus']);
Route::get('/pegawai/cari', [pegawaiDBController::class,'cari']);

//Pertemuan 7
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// route CRUD nilaikuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/create', [NilaiKuliahController::class, 'create'])->name('nilaikuliah.create');
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');
Route::get('/nilaikuliah/read/{id}', [NilaiKuliahController::class, 'read'])->name('nilaikuliah.read');
Route::get('/nilaikuliah/edit/{id}', [NilaiKuliahController::class, 'edit'])->name('nilaikuliah.edit');
Route::post('/nilaikuliah/update/{id}', [NilaiKuliahController::class, 'update'])->name('nilaikuliah.update');
Route::get('/nilaikuliah/delete/{id}', [NilaiKuliahController::class, 'delete'])->name('nilaikuliah.delete');
