<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorazonController;
use App\Http\Controllers\apiController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [CorazonController::class, 'temas'])->name('inicio');
Route::get('/ok', [apiController::class, 'otro'])->name('otro');
Route::get('/{slug}', [CorazonController::class, 'vistatemas'])->name('temas');
