<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.page.landingpage', ['title' => 'Landing Page']);
})->middleware(['must-guest']);
Route::get('/dashboard', function () {
    return view('admin.page.dashboard', ['title' => 'Dashboard']);
})->middleware('auth');
Route::get('/analysismap', function () {
    return view('admin.page.analysisMap', ['title' => 'analysismap']);
})->middleware('auth');

Route::get('/masuk',[\App\Http\Controllers\AuthController::class, 'masuk'])->name('masuk')->middleware('guest');
Route::post('/masuk',[\App\Http\Controllers\AuthController::class, 'autentikasi'])->middleware('guest');
Route::get('/keluar',[\App\Http\Controllers\AuthController::class, 'keluar'])->middleware('auth');
// Route::post('/login/masuk',[\App\Http\Controllers\LoginController::class, 'masuk']);

Route::get('/regularmap',[\App\Http\Controllers\regularMapController::class, 'index'])->middleware('auth');
Route::get('/regularmap/rmap',[\App\Http\Controllers\regularMapController::class, 'rmap']);
Route::get('/terminal/terminaltitik', [\App\Http\Controllers\terminalController::class, 'terminaltitik']);
Route::get('/aksesinternet/aksesinternettitik', [\App\Http\Controllers\aksesInternetController::class, 'aksesinternettitik']);


Route::resource('/user', \App\Http\Controllers\userController::class)->middleware('auth');
Route::resource('/btstower', \App\Http\Controllers\btsTowerController::class)->middleware(['auth','must-superadmin-and-admin']);
Route::resource('/tipetower', \App\Http\Controllers\tipeTowerController::class)->middleware(['auth','must-superadmin-and-admin']);
Route::resource('/tipesite', \App\Http\Controllers\tipeSiteController::class)->middleware(['auth','must-superadmin-and-admin']);
Route::resource('/penyedialayanan', \App\Http\Controllers\penyediaLayananController::class)->middleware(['auth','must-superadmin-and-admin']);
Route::resource('/jenissumberdaya', \App\Http\Controllers\jenisSumberDayaController::class)->middleware(['auth','must-superadmin-and-admin']);
Route::resource('/kapasitassumberdaya', \App\Http\Controllers\kapasitasSumberDayaController::class)->middleware(['auth','must-superadmin-and-admin']);
Route::resource('/konfigurasipower', \App\Http\Controllers\konfigurasiPowerController::class)->middleware(['auth','must-superadmin-and-admin']);
Route::resource('/konfigurasitransmisi', \App\Http\Controllers\konfigurasiTransmisiController::class)->middleware(['auth','must-superadmin-and-admin']);
Route::resource('/terminal', \App\Http\Controllers\terminalController::class)->middleware(['auth','must-superadmin-and-admin']);
Route::resource('/aksesinternet', \App\Http\Controllers\aksesInternetController::class)->middleware(['auth','must-superadmin-and-admin']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
