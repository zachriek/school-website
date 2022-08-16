<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/jurusan')
    ->name('majors.')
    ->group(function () {
        Route::get('/{major}', [MajorController::class, 'show'])->name('show');
    });

Route::prefix('/blogs')
    ->name('blogs.')
    ->group(function () {
        Route::get('/{blog}', [BlogController::class, 'show'])->name('show');
    });

Route::prefix('/news')
    ->name('news.')
    ->group(function () {
        Route::get('/{news}', [NewsController::class, 'show'])->name('show');
    });
