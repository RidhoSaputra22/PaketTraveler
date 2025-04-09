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
    $datas = [
        "produk_dipesan" => 20,
        "jumlah_produk" => 20,
        "jumlah_pasien" => 20,
    ];




    return view('admin.dashboard', compact('datas'));
});

// Route::middleware(['admin'])->group(function () {
//     Route::resource('admin/anggota', UserController::class);
//     Route::get('admin/dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
//     Route::get('admin/print', [UserController::class, 'print'])->name('admin.print');
// });

Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
Route::get('/regist', [CustomAuthController::class, 'regist']);
Route::post('/login', [CustomAuthController::class, 'customLogin'])->name('user.login');
Route::post('/regist', [CustomAuthController::class, 'customLogin'])->name('user.regist');
Route::get('/logout', [CustomAuthController::class, 'logout']);



