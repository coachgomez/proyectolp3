<?php

use App\Http\Controllers\ActividadCapacitacionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\ResponsableController;

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

Route::get('/', function () {
    return view('welcome');
});




// Rutas para los establecimientos
Route::get('/establecimientos/create', [EstablecimientoController::class, 'create'])->name('establecimientos.create');
Route::post('/establecimientos', [EstablecimientoController::class, 'store'])->name('establecimientos.store');
Route::get('/establecimientos/{id}', [EstablecimientoController::class, 'show'])->name('establecimientos.show');


// Rutas para los responsables
Route::get('/responsables/create', [ResponsableController::class, 'create'])->name('responsables.create');
Route::post('/responsables', [ResponsableController::class, 'store'])->name('responsables.store');
Route::get('/responsables/{id}', [ResponsableController::class, 'show'])->name('responsables.show');

// Rutas para las actividades de capacitación

Route::get('/actividad/create', [ActividadCapacitacionController::class, 'create'])->name('actividad.create');
Route::post('/actividad', [ActividadCapacitacionController::class, 'store'])->name('actividad.store');
Route::get('/actividad/{id}', [ActividadCapacitacionController::class, 'show'])->name('actividad.show');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
