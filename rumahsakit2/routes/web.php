<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\AdminDokter;
use App\Http\Controllers\AdminPasien;
use App\Http\Controllers\AdminPendaftaran;
use App\Http\Controllers\AdminPoli;
use App\Http\Controllers\AdminRekammedis;
use App\Http\Controllers\AdminUser;
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

Route::get('/', [AdminDashboard::class, 'index']);

Route::get('/admin/user/create', [AdminUser::class, 'create']);
Route::post('/admin/user/store', [AdminUser::class, 'store']);

Route::get('/admin/dokter', [AdminDokter::class, 'index']);
Route::get('/admin/dokter/create', [AdminDokter::class, 'create']);
Route::post('/admin/dokter/store', [AdminDokter::class, 'store']);
Route::get('/admin/dokter/edit/{dokter}', [AdminDokter::class, 'edit']);
Route::delete('/admin/dokter/del/{dokter}', [AdminDokter::class, 'destroy']);

Route::get('/admin/pasien', [AdminPasien::class, 'index']);
Route::get('/admin/pasien/{pasien}', [AdminPasien::class, 'edit']);

Route::get('/admin/pendaftaran', [AdminPendaftaran::class, 'index']);
Route::get('/admin/pendaftaran/{pendaftaran}', [AdminPendaftaran::class, 'edit']);

Route::get('/admin/poli', [AdminPoli::class, 'index']);
Route::get('/admin/poli/{poli}', [AdminPoli::class, 'edit']);

Route::get('/admin/rekammedis', [AdminRekammedis::class, 'index']);
Route::get('/admin/rekammedis/{rekammedis}', [AdminRekammedis::class, 'edit']);
