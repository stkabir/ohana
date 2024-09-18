<?php

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

Route::view('/', 'site.index', ['component' => 'site.login']);

Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::view('/inicio', 'dashboard.index', ['component' => 'dashboard.home'])->name('home');
});

Route::view('/login', 'site.index', ['component' => 'site.login'])->name('login');
Route::view('/registro', 'site.index', ['component' => 'site.registro'])->name('register');

Route::fallback(function () {
    return redirect()->back();
});