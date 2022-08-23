<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');

Route::resource('/assures', 'AssureController');
Route::resource('/vehicules', 'VehiculeController');
Route::resource('/paiements', 'PaiementController');
Route::get('/assure/{assur}/paiement', [App\Http\Controllers\PaiementController::class, 'assurePaiement'])->name('assures.paiement');
Route::get('/assure/{assur}/paiement', [App\Http\Controllers\PaiementController::class, 'assurePaiement'])->name('assures.paiement');