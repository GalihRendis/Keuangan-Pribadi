<?php

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

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'viewLogin'])->name('login.index');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'attemptLogin'])->name('login');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/register', [App\Http\Controllers\Auth\LoginController::class, 'viewRegister'])->name('register.index');
Route::post('/register', [App\Http\Controllers\Auth\LoginController::class, 'attemptRegister'])->name('register');

Route::prefix('SI')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\SI\DashboardController::class, 'index'])->name('SI.dashboard');

    // Keuangan
    Route::get('/keuangan', [App\Http\Controllers\SI\KeuanganController::class, 'index'])->name('SI.keuangan');
    Route::post('/keuangan', [App\Http\Controllers\SI\KeuanganController::class, 'create'])->name('SI.keuangan-create');
    Route::post('/keuangan-update', [App\Http\Controllers\SI\KeuanganController::class, 'update'])->name('SI.keuangan-update');
    Route::get('/keuangan/{id}/delete', [App\Http\Controllers\SI\KeuanganController::class, 'delete'])->name('SI.keuangan-delete');
    Route::get('/keuangan-search', [App\Http\Controllers\SI\KeuanganController::class, 'index'])->name('SI.keuangan-search');

    // Kebutuhan
    Route::get('/kebutuhan', [App\Http\Controllers\SI\KebutuhanController::class, 'index'])->name('SI.kebutuhan');
    Route::post('/kebutuhan', [App\Http\Controllers\SI\KebutuhanController::class, 'create'])->name('SI.kebutuhan-create');
    Route::post('/kebutuhan-update', [App\Http\Controllers\SI\KebutuhanController::class, 'update'])->name('SI.kebutuhan-update');
    Route::get('/kebutuhan/{id}/delete', [App\Http\Controllers\SI\KebutuhanController::class, 'delete'])->name('SI.kebutuhan-delete');
    Route::get('/kebutuhan-search', [App\Http\Controllers\SI\KebutuhanController::class, 'index'])->name('SI.kebutuhan-search');
});
