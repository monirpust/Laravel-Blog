<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

Route::get('/', [PagesController::Class, 'index'])->name('home');
Route::get('/blog', [PostsController::Class, 'index'])->name('blog');
Route::get('/blog/create', [PostsController::Class, 'create'])->name('create');
Route::get('/blog/{slug}', [PostsController::class, 'show'])->name('show');
Route::post('/blog', [PostsController::class, 'store'])->name('store');
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

