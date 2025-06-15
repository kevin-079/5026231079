<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\RotiDBController;
use App\Http\Controllers\PageCounterController;
use App\Http\Controllers\KeranjangBelanjaDBController;
use App\Http\Controllers\KaryawanDBController;


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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com<h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('bootstrap1', function () {
	return view('fe/bootstrap1');
});

Route::get('bootstrap2', function () {
	return view('fe/bootstrap2');
});

Route::get('ets', function () {
	return view('fe/ets');
});

Route::get('js1', function () {
	return view('fe/js1');
});

Route::get('js1', function () {
	return view('fe/js1');
});

Route::get('js2', function () {
	return view('fe/js2');
});

Route::get('linktree', function () {
	return view('fe/linktree');
});

Route::get('pertama', function () {
	return view('fe/pertama');
});

Route::get('pertemuan4', function () {
	return view('fe/pertemuan4');
});

Route::get('frontend', function () {
	return view('fe/frontend');
});

Route::get('template', function () {
    return view('template');
});

Route::get('hello',[Coba::class,'helloworld']);
//Route::get('hello','App\Http\Controllers\Coba@helloworld')

Route::get('dosen', [Coba::class, 'index']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isi formulir
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //action form

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route CRUD Pegawai
Route::get('/pegawai',[PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);

//route CRUD Roti
Route::get('/roti', [RotiDBController::class, 'index']);
Route::get('/roti/tambah', [RotiDBController::class, 'tambah']);
Route::post('/roti/store', [RotiDBController::class, 'store']);
Route::get('/roti/edit/{id}', [RotiDBController::class, 'edit']);
Route::post('/roti/update', [RotiDBController::class, 'update']);
Route::get('/roti/hapus/{id}', [RotiDBController::class, 'hapus']);
Route::get('/roti/cari', [RotiDBController::class, 'cari']);

//route untuk tugas 1: page counter
Route::get('/', [PageCounterController::class, 'index']);

//route untuk tugas 2: keranjang belanja
Route::get('/keranjangbelanja', [KeranjangBelanjaDBController::class,'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaDBController::class,'tambah']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaDBController::class,'store']);
Route::get('/keranjangbelanja/edit/{id}', [KeranjangBelanjaDBController::class,'edit']);
Route::post('/keranjangbelanja/update', [KeranjangBelanjaDBController::class,'update']);
Route::get('/keranjangbelanja/hapus/{id}', [KeranjangBelanjaDBController::class,'hapus']);

//route untuk tugas 3: karyawan
Route::get('/karyawan', [KaryawanDBController::class,'index']);
Route::get('/karyawan/tambah', [KaryawanDBController::class,'tambah']);
Route::post('/karyawan/store', [KaryawanDBController::class,'store']);
Route::get('/karyawan/edit/{id}', [KaryawanDBController::class,'edit']);
Route::post('/karyawan/update', [KaryawanDBController::class,'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanDBController::class,'hapus']);








