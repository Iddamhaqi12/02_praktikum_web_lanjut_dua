<?php
use App\Http\Controllers\pagecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [pagecontroller::class, 'index']);
//Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [pagecontroller::class, 'about']);
//Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [pagecontroller::class, 'articles']);
//Route::get('/article/{id}', [ArticleController::class, 'articles']);
