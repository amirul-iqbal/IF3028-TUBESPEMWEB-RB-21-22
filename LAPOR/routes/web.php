<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laporController;

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


Route::get('/', [laporController::class, 'index'])->name('index');
Route::get('/lapor', [laporController::class, 'create'])->name('create');
Route::post('/lapor', [laporController::class, 'store'])->name('store');
Route::get('/lapor/{id}', [laporController::class, 'show'])->name('show');
Route::post('/delete/{id}', [laporController::class, 'destroy'])->name('delete');
