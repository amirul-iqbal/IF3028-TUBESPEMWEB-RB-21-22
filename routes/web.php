<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporController;

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

Route::get('/', [LaporController::class, 'index']);

Route::get('/buat-laporan', [LaporController::class, 'laporan']);

Route::get('/view-laporan/{id}', [LaporController::class, 'show']);

Route::post('/store', [LaporController::class, 'store']);

Route::get('/edit/{id}', [LaporController::class, 'update']);

Route::get('/delete/{id}', [LaporController::class, 'delete']);

Route::post('/update/{id}', [LaporController::class, 'updated']);


