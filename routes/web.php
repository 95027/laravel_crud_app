<?php

use App\Http\Controllers\HomeController;
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

Route::get("/", [HomeController::class, 'home'])->name('home');

Route::get('create', [HomeController::class, 'create'])->name('create');

Route::post('store', [HomeController::class, 'store'])->name('store');

Route::get('delete/{id}', [HomeController::class, 'delete'])->name('delete');

Route::get('edit/{id}', [HomeController::class, 'edit'])->name('edit');

Route::post('update', [HomeController::class, 'update'])->name('update');


