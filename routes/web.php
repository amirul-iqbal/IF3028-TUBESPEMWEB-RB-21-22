<?php

use Illuminate\Support\Facades\Route;

use App\Models\Laporan;
use App\Models\Aspek;
use App\Models\User;

use App\Http\Controllers\LaporanController;

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

Route::get('/aspek/{aspek:slug}', function(Aspek $aspek){
    return view('home',[
        'dataLaporan' => $aspek->laporan->load('aspek', 'user'),
        'title' => "Daftar laporan dengan Aspek :$aspek->aspek_laporan"

    ]);
});

Route::get('/pelapor/{user:username}', function(User $user){
    return view('home',[
        'dataLaporan' => $user->laporan->load('aspek', 'user'),
        'title' => "Daftar laporan dengan Pelapor :$user->name"
    ]);
});
