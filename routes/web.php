<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
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

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/control-de-ingreso', function () {
    return view('control-de-ingreso');
})->name('control-de-ingreso');

Route::get('/mesa-de-partes-virtual', function () {
    return view('mesa-de-partes-virtual');
})->name('mesa-de-partes-virtual');

Route::get('/objetos-perdidos', function () {
    return view('objetos-perdidos');
})->name('objetos-perdidos');

Route::get('/registro-de-vehiculos', function () {
    return view('registro-de-vehiculos');
})->name('registro-de-vehiculos');

Route::get('/registro-de-visitantes', function () {
    return view('registro-de-visitantes');
})->name('registro-de-visitantes');

Route::get('/transparencia_y_administracion', function () {
    return view('transparencia_y_administracion');
})->name('transparencia_y_administracion');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');
// PÃ¡gina de inicio de sesiÃ³n (pÃºblica)
Route::get('/login', function () {
    return view('auth.login'); // Nombre de la vista
})->name('login')->middleware('guest');

Route::get('/participacion', function () {
    return view('participacion'); // Nombre de la vista
})->name('participacion');

Route::get('/archivo-digital', function () {
    return view('archivo-digital'); // Nombre de la vista
})->name('archivo-digital');

Route::get('/votacion-electronica', function () {
    return view('votacion-electronica'); // Nombre de la vista
})->name('votacion-electronica');

Route::get('/familiares-registrados', function () {
    return view('familiares-registrados'); // Nombre de la vista
})->name('familiares-registrados');



//Route::get('/cuenta', function () { return view('cuentas'); })->name('cuenta');
Route::get('/cuenta', [PaymentController::class, 'showPaymentForm'])->name('cuenta');

Route::middleware(['auth'])->group(function () {

    Route::get('/perfil', function () {
        return view('perfil');
    })->name('perfil');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/importar', [ImportController::class, 'index'])->name('importar.index');
    Route::post('/importar', [ImportController::class, 'importar'])->name('importar');
});
