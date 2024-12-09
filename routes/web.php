<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ArticleCategorieController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SiteHomeController;
use Illuminate\Support\Facades\Route;

/****************************************** Administration *********************************************/
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'handleLogin'])->name('handleLogin');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'handleRegister'])->name('handleRegister');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AppController::class, 'index'])->name('dashboard');

    Route::prefix('users')->group(function () {
        Route::get('/', [AuthController::class, 'index'])->name('user.index');
        Route::get('/edit/{id}/{statut}', [AuthController::class, 'update'])->name('user.update');
    });

    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categorie.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categorie.create');
        Route::post('/create', [CategoryController::class, 'store'])->name('categorie.store');
        Route::get('/edit/{categorie}', [CategoryController::class, 'edit'])->name('categorie.edit');
        Route::put('/edit/{categorie}', [CategoryController::class, 'update'])->name('categorie.update');
    });

    Route::prefix('articles')->group(function () {
        Route::get('/', [ArticleController::class, 'index'])->name('article.index');
        Route::get('/create', [ArticleController::class, 'create'])->name('article.create');
        Route::post('/create', [ArticleController::class, 'store'])->name('article.store');
        Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
        Route::put('/edit/{article}', [ArticleController::class, 'update'])->name('article.update');
    });
});

/**************************************************** Site ***************************************************/

$idRegex='[0-9]+';
$slugRegex='[0-9a-z\-]+';

Route::get('/', [SiteHomeController::class, 'index'])->name('home');
Route::get('/single/{slug}-{article}', [SiteHomeController::class, 'show'])->name('singlearticle.show')->where([
    'article'=>$idRegex,
    'slug'=>$slugRegex
]);
Route::post('/single/{slug}-{article}', [SiteHomeController::class, 'store'])->name('singlearticle.store')->where([
    'article'=>$idRegex,
    'slug'=>$slugRegex
]);
Route::get('/categorie', [ArticleCategorieController::class, 'index'])->name('categoriearticle.index');
Route::get('/categorie/{categorie}', [ArticleCategorieController::class, 'show'])->name('categoriearticle.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/apropos', [ContactController::class, 'apropos'])->name('apropos');
?>

