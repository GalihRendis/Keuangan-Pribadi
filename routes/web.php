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

Route::prefix('SI')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\SI\DashboardController::class, 'index'])->name('SI.dashboard');
});
