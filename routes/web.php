<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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

//auth uchun Marshrutlar
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'register_store'])->name('register.store');


//Sahifalar uchun Marshrutlar
Route::get('/',[PageController::class, 'index'])->name('index');
Route::get('conferences',[PageController::class, 'conferences'])->name('conferences');
Route::get('articles',[PageController::class, 'articles'])->name('articles');
Route::get('about',[PageController::class, 'about'])->name('about');
