<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\DB;

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

Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');

Route::get('/pegawai/tambah', 'App\Http\Controllers\PegawaiController@tambah');

Route::post('/pegawai/simpan', 'App\Http\Controllers\PegawaiController@simpan');

Route::get('/pegawai/edit/{id}', 'App\Http\Controllers\PegawaiController@edit');

Route::get('/pegawai/hapus/{id}', 'App\Http\Controllers\PegawaiController@hapus');

Route::put('/pegawai/update', 'App\Http\Controllers\PegawaiController@update');
