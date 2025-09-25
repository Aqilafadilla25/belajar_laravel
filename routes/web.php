<?php

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\MatakuliahController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR';
});

Route::get('/mahasiswa', function () {
    return 'Hallo Mahasiswa';
});

Route::get('/nama/{Aqila}', function ($param1) {
    return 'Nama Saya: '.$param1;
});

Route::get('/nim/{param1}', function ($param1 = '') {
    return 'Nim Saya: '.$param1;
});


Route::get('/mahasiswa', function () {
    return 'Hallo Mahasiswa ';
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});


Route::get('/matakuliah/{$param1?}', [MatakuliahController::class, 'show']);
Route::get('/matakuliahshow', [MatakuliahController::class, 'index']);
Route::get('/matakuliahshow', [MatakuliahController::class, 'create']);
Route::get('/matakuliahshow', [MatakuliahController::class, 'store']);
Route::get('/matakuliahshow', [MatakuliahController::class, 'edit']);
Route::get('/matakuliahshow', [MatakuliahController::class, 'update']);
Route::get('/matakuliahshow', [MatakuliahController::class, 'destroy']);








