<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController; // Correcta importación del controlador

// Ruta principal que usa el controlador LandingController
Route::get('/', 'LandingController@index');

// Ruta para la página landing, que muestra la vista 'landing'
Route::get('/landing', function () {
    return view('landing');
});

Route::get('/detalles', function () {
    return view('detalles');

 });   

 Route::get('/carritocompras', function () {
    return view('carritocompras');

 });   