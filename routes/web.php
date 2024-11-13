<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsNormalUser;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('welcome');
});

// group user biasa (All role)
Route::middleware([
    // 'auth:sanctum',
    // 'verified',
    config('jetstream.auth_session'),
    IsNormalUser::class,
])->controller(UserController::class)
->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

// group admin
Route::prefix('admin')
->controller(AdminController::class)
->middleware([
    IsAdmin::class, 
    config('jetstream.auth_session'),
])->name('admin.')
->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});