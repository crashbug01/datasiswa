<?php

use App\Http\Controllers\Bootstrap;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mhs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(Bootstrap::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/tambah', 'tambah');
    Route::post('/simpan', 'simpan');
    Route::get('/formedit/{idmhs}', 'formedit');
    Route::put('/edit', 'edit');
    Route::delete('/hapus/{idmhs}', 'hapus');
});

Route::controller(Mhs::class)->group(function () {
    Route::get('/Mhs/index', 'index');
    Route::get('/Mhs/tambah', 'add');
    Route::post('/Mhs/Simpan', 'simpanMhs');
    Route::get('/Mhs/formedit/{idmhs}', 'formedit');
    Route::put('/Mhs/edit', 'edit');
    Route::delete('/Mhs/hapus/{idmhs}', 'hapus');
});
