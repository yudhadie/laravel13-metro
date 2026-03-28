<?php

use App\Http\Controllers\Admin\DashboardCotroller;
use App\Http\Controllers\Admin\Setting\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    //Dashboard
    Route::get('/dashboard', [DashboardCotroller::class, 'index'])->name('dashboard');
    //User
    Route::resource('setting/user', UserController::class);
    Route::get('/setting/user-data', [UserController::class, 'data'])->name('user.data');
});

require __DIR__ . '/auth.php';
