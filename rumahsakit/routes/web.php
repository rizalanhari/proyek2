<?php

use App\Http\Controllers\DashboardDokter;
use App\Http\Controllers\Dokter;
use App\Http\Controllers\DokterDashboard;
use App\Http\Controllers\Pasien;
use App\Http\Controllers\Pendaftaran;
use App\Http\Controllers\Poli;
use App\Http\Controllers\Rekammedis;
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

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard/dashboard');
});
Route::get('/', function () {
    return view('admin/dashboard/dashboard');
});
Route::get('/admin/dokter', [Dokter::class, 'index']);
Route::get('/admin/dokter/{dokter}', [Dokter::class, 'edit']);

Route::get('/admin/pasien', [Pasien::class, 'index']);
Route::get('/admin/pasien/{pasien}', [Pasien::class, 'edit']);

Route::get('/admin/poli', [Poli::class, 'index']);
Route::get('/admin/poli/{poli}', [Poli::class, 'edit']);

Route::get('/admin/pendaftaran', [Pendaftaran::class, 'index']);
Route::get('/admin/pendaftaran/{pendaftaran}', [Pendaftaran::class, 'edit']);

Route::get('/admin/rekammedis', [Rekammedis::class, 'index']);
Route::get('/admin/rekammedis/{rekammedis}', [Rekammedis::class, 'edit']);

Route::get('/dokter', [DokterDashboard::class, 'index']);
