<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ComicController::class, "index"])->name("homepage");

/* Create */
Route::get('/create', [ComicController::class, "create"])->name("home.create");

/* Store */
Route::post('/', [ComicController::class, "store"])->name("home.store");

/* Show */
Route::get('/{id}', [ComicController::class, "show"])->name("home.show");
