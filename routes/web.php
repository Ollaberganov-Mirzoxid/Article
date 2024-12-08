<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConferenceController;
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


//Maqolala uchun Marshrutlar
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('article_show');
Route::get('/create_articles', [ArticleController::class, 'create_articles'])->name('create_articles');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

//Ilmiy Amaliy Anjumanlar uchun Marshrutlar
Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences');
Route::get('/conferences/{conference}', [ConferenceController::class, 'show'])->name('conference_show');
Route::get('/create_conferences', [ConferenceController::class, 'create_conferences'])->name('create_conferences');
Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');

//Admin panel uchun marshrutlar
// routes/web.php
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/articles/approve/{id}', [AdminController::class, 'approve'])->name('admin.articles.approve');
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/pending-articles', [AdminController::class, 'pendingArticles'])->name('admin.pendingArticles');
    Route::post('/admin/approve-article/{id}', [AdminController::class, 'approveArticle'])->name('admin.approveArticle');
});