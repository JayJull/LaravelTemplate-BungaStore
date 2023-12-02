<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BungaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'homeindex'])->name('home');
Route::get('/about', [HomeController::class, 'aboutindex'])->name('about');

Route::get('/blog', [BungaController::class, 'index'])->name('blog');

// single post
Route::get('/blog/{bunga:slug}', [BungaController::class, 'single'])->name('singleblog');

Route::get('/category', [KategoriController::class, 'index'])->name('kategori');
Route::get('/category/{kategori:slug}', [KategoriController::class, 'single'])->name('singlekategori');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashadmin', function(){
    return view('dsadmin.dashboard');
})->name('dashadmin')->middleware('auth');

Route::get('/crud', [ProductController::class, 'index'])->name('crud')->middleware('auth');

Route::get('/crudshow', [ProductController::class, 'create'])->name('crudshow')->middleware('auth');
Route::get('/crudcreateslug', [ProductController::class, 'checkSlug']);
Route::post('/store', [ProductController::class, 'store'])->name('store');

Route::get('/crud/edit/{bunga:slug}', [ProductController::class, 'edit'])->name('crudid')->middleware('auth');
Route::post('/update/{bunga:slug}', [ProductController::class, 'update'])->name('update');

Route::post('/crud/delete/{bunga:slug}', [ProductController::class, 'destroy'])->name('cruddel')->middleware('auth');