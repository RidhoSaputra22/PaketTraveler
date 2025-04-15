<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'homepage']);
Route::get('/detail/{paketTravel}', [UserController::class, 'detail']);
Route::get('/paket', [UserController::class, 'paket']);


Route::middleware(['auth'])->get('/profile', [UserController::class, 'profile']);





Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
Route::get('/regist', [CustomAuthController::class, 'regist']);
Route::post('/login-user', [CustomAuthController::class, 'customLogin'])->name('user.login');
Route::post('/regist-user', [CustomAuthController::class, 'customRegistration'])->name('user.regist');
Route::get('/logout', [CustomAuthController::class, 'logout']);
