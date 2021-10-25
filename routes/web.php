<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\HistorialController;

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

Route::get('/', function () {
    return view('welcome');
});


  Route::resources([
    'personas' => PersonaController::class,
    'recursos' => RecursoController::class,
    'prestamos' => PrestamoController::class,
    'historials' => HistorialController::class,
]);




Route::get('/home', function () {
    return view('home');
});
