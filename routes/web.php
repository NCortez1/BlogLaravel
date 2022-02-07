<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/', [BlogController::class, 'index'])->name('main');

Route::get('/login', [SessionController::class, 'index'])->name('login');

Route::post('/login/verify', [SessionController::class, 'login'])->name('login.verify');

Route::get('/logout', [SessionController::class, 'logout'])->name('logout');;


Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register/create', [RegisterController::class, 'register'])->name('register.create');


Route::get('/blog/insert', [BlogController::class, 'create_view'])->name('blog.create_view');

Route::post('/blog/insert', [BlogController::class, 'create'])->name('blog.create');

Route::get('/blog/update', [BlogController::class, 'update_view'])->name('blog.update_view');

Route::post('/blog/update', [BlogController::class, 'update'])->name('blog.update');