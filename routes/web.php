<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController; // Correcta importación del controlador

// Ruta principal que usa el controlador LandingController
Route::get('/', 'LandingController@index');

// Ruta para la página landing, que muestra la vista 'landing'
Route::get('/landing', function () {
    return view('landing');
});

// Ruta para la página de detalles de un producto
Route::get('/detalles/{id}', [ProductoController::class, 'mostrarDetalles'])->name('detalles');
