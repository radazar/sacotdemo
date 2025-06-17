<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

//rutas navbar
Route::get('/', function () {
    return view('pageIni');
})->name('inicio');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

//ruta uso form contacto
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');