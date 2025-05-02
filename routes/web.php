<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;


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

// JS 02
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');

// JS 03
Route::get('/level',[LevelController::class,'index']);
Route::get('kategori',[KategoriController::class,'index']);