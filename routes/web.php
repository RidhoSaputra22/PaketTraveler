<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/paket-travel', function () {
    return view('paket');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});



Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
Route::get('/regist', [CustomAuthController::class, 'regist']);
Route::post('/login', [CustomAuthController::class, 'customLogin'])->name('user.login');
Route::post('/regist', [CustomAuthController::class, 'customLogin'])->name('user.regist');
Route::get('/logout', [CustomAuthController::class, 'logout']);



