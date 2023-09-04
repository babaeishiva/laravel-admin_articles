<?php

use App\Http\Controllers\Admin\ArticleController;
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


Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'about'])->middleware('auth');
Route::get('/articles/{article}', [HomeController::class, 'index']);


Route::prefix('admin')->middleware('auth')->group(function () {

    Route::resource('articles', ArticleController::class)->except(['show']);
});

Auth::routes();

