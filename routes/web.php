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

Route::get('/', [App\Http\Controllers\ZdjecieController::class, 'public']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/zdjecie', [App\Http\Controllers\ZdjecieController::class, 'index']);

Route::resource('zdjecie', App\Http\Controllers\ZdjecieController::class);

Route::get('/link', [App\Http\Controllers\LinkController::class, 'index']);

Route::resource('link', App\Http\Controllers\LinkController::class);
