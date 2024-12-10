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

Route::prefix("/")->group(function() {
    Route::view('/', 'publico.home')->name("publico.home");
    Route::view('/buscar-traslados', 'publico.busqueda.traslados')->name("publico.buscar.traslados");
    Route::view('/reservacion', 'publico.reservaciones.traslados')->name('publico.reservar.traslados');
});

Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::view('/inicio', 'dashboard.index', ['component' => 'dashboard.home'])->name('home');
    Route::view('/zonas', 'dashboard.index', ['component' => 'dashboard.zona'])->name('zona');
    Route::view('/hoteles', 'dashboard.index', ['component' => 'dashboard.lugar'])->name('lugar');
    Route::view('/servicios', 'dashboard.index', ['component' => 'dashboard.servicio'])->name('servicio');
    Route::view('/unidades', 'dashboard.index', ['component' => 'dashboard.unidad'])->name('unidad');
    Route::view('/tarifas', 'dashboard.index', ['component' => 'dashboard.tarifa'])->name('tarifa');
});

Route::view('/login', 'site.index', ['component' => 'site.login'])->name('login');
Route::view('/registro', 'site.index', ['component' => 'site.registro'])->name('register');

Route::fallback(function () {
    return redirect()->back();
});