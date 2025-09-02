<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Ruta principal que usa el controlador LandingController
Route::get('/', 'LandingController@index');

// Ruta para la página landing, que muestra la vista 'landing'
Route::get('/landing', function () {
    return view('landing');
});
