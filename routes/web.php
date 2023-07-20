<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\IndexGuruController;
use App\Http\Controllers\LoginGuruController;
use App\Http\Controllers\SuratKeputusanController;
use App\Http\Controllers\UploadGuruController;
use App\Models\UploadGuru;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginGuruController::class, 'index'])->name('auth.index');
Route::post('/', [LoginGuruController::class, 'login']);

Route::middleware('auth:guru')->group(function () {
  Route::get('/guru', [IndexGuruController::class, 'index'])->name('upload.guru.index');

  Route::post('/upload', [UploadGuruController::class, 'store'])->name('upload.guru.store');
  Route::post('/logout', [LoginGuruController::class, 'logout'])->name('auth.logout');
});

Route::middleware('guest')->prefix('admin')->group(function () {

  Route::get('/login', [LoginController::class, 'index'])->name('admin.auth.index');
  Route::post('/login', [LoginController::class, 'login'])->name('admin.auth.login');
});

Route::middleware('auth')->prefix('admin')->group(function () {
  Route::post('/logout', [LoginController::class, 'logout'])->name('admin.auth.logout');
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
  Route::resource('/keputusan', SuratKeputusanController::class, ['as' => 'admin']);
  Route::resource('/guru', GuruController::class, ['as' => 'admin']);

  Route::get('/upload', [UploadGuruController::class, 'index'])->name('admin.upload.index');
});
