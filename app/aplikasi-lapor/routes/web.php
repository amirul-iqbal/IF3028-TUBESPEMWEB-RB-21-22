<?php

use App\Http\Controllers\BuatLaporanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EditLaporanController;
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

Route::get ('/', [HomeController::class, 'index']);
Route::get ('/buat_laporan', [BuatLaporanController::class, 'index']);
Route::get ('/edit_laporan/{laporan}', [EditLaporanController::class, 'index']);
Route::post ('/buat_laporan', [BuatLaporanController::class, 'simpan']);
Route::post ('/{laporan}', [HomeController::class, 'hapus']);
Route::get ('/detailLaporan/{laporan}', [HomeController::class, 'detailLaporan']);
