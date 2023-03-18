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

Route::get('/', [\App\Http\Controllers\AccueilController::class, 'afficher_accueil']);

Auth::routes();

Route::get('/admin-star', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
