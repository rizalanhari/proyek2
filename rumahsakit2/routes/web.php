<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\AdminDokter;
use App\Http\Controllers\AdminPasien;
use App\Http\Controllers\AdminPendaftaran;
use App\Http\Controllers\AdminPoli;
use App\Http\Controllers\AdminRekammedis;
use App\Http\Controllers\AdminSpesialis;
use App\Http\Controllers\AdminUser;
use App\Http\Controllers\DokterPemeriksaan;
use App\Http\Controllers\PasienAppointment;
use App\Http\Controllers\PasienHome;
use App\Models\SpesialisModel;
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

//Admin
Route::get('/', [AdminDashboard::class, 'index']);

Route::get('/admin/user/create', [AdminUser::class, 'create']);
Route::post('/admin/user/store', [AdminUser::class, 'store']);

Route::get('/admin/dokter', [AdminDokter::class, 'index']);
Route::get('/admin/dokter/create', [AdminDokter::class, 'create']);
Route::post('/admin/dokter/store', [AdminDokter::class, 'store']);
Route::delete('/admin/dokter/del/{dokter}', [AdminDokter::class, 'destroy']);
Route::get('/admin/dokter/edit/{dokter}', [AdminDokter::class, 'edit']);
Route::patch('/admin/dokter/update/{dokter}', [AdminDokter::class, 'update']);

Route::get('/admin/pasien', [AdminPasien::class, 'index']);
Route::get('/admin/pasien/{pasien}', [AdminPasien::class, 'edit']);

Route::get('/admin/pendaftaran', [AdminPendaftaran::class, 'index']);
Route::get('/admin/pendaftaran/{pendaftaran}', [AdminPendaftaran::class, 'edit']);

Route::get('/admin/poli', [AdminPoli::class, 'index']);
Route::get('/admin/poli/create', [AdminPoli::class, 'create']);
Route::post('/admin/poli/store', [AdminPoli::class, 'store']);
Route::delete('/admin/poli/del/{poli}', [AdminPoli::class, 'destroy']);
Route::get('/admin/poli/edit/{poli}', [AdminPoli::class, 'edit']);
Route::patch('/admin/poli/update/{poli}', [AdminPoli::class, 'update']);

Route::get('/admin/spesialis', [AdminSpesialis::class, 'index']);
Route::get('/admin/spesialis/create', [AdminSpesialis::class, 'create']);
Route::post('/admin/spesialis/store', [AdminSpesialis::class, 'store']);
Route::delete('/admin/spesialis/del/{spesialis}', [AdminSpesialis::class, 'destroy']);
Route::get('/admin/spesialis/edit/{spesialis}', [AdminSpesialis::class, 'edit']);
Route::patch('/admin/spesialis/update/{spesialis}', [AdminSpesialis::class, 'update']);

Route::get('/admin/rekammedis', [AdminRekammedis::class, 'index']);
Route::get('/admin/rekammedis/{rekammedis}', [AdminRekammedis::class, 'edit']);

//Pasien
Route::get('/rumahsakit', [PasienHome::class, 'index']);
Route::get('/rumahsakit/appointment', [PasienAppointment::class, 'index']);
Route::get('/pasien/poli/select/{poli}', [PasienAppointment::class, 'selectpoli']);
Route::post('/pasien/appointment/store', [PasienAppointment::class, 'store']);

//Dokter
Route::get('/dokter', [DokterPemeriksaan::class, 'index']);
