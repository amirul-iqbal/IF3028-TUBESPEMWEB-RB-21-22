<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CrudLaporanController;



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



Route::get('/', [LaporanController::class, 'index']);

Route::get('/laporan/{laporan}', [LaporanController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', function(){
// 	return view('dashboard.index', [
// 	]);
// })->middleware('auth');

Route::get('/laporansaya/checkSlug', [CrudLaporanController::class, 'checkSlug'])->middleware('auth');
Route::resource('/laporansaya', CrudLaporanController::class)->middleware('auth');

// Route::get('/aspek/{aspek:slug}', function(Aspek $aspek){
//     return view('home',[
//         'dataLaporan' => $aspek->laporan->load('aspek', 'user'),
//         'title' => "Daftar laporan dengan Aspek :$aspek->aspek_laporan"

//     ]);
// });

// Route::get('/pelapor/{user:username}', function(User $user){
//     return view('home',[
//         'dataLaporan' => $user->laporan->load('aspek', 'user'),
//         'title' => "Daftar laporan dengan Pelapor :$user->name"
//     ]);
// });
