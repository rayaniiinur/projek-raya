<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TanahController;
use App\Http\Controllers\BangunanController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Protected Routes - Authenticated Users
Route::middleware('auth')->group(function () {
    Route::get('/tanah', [TanahController::class, 'index'])->name('tanah.index');
    Route::get('/tanah/create', [TanahController::class, 'create'])->name('tanah.create');
    Route::post('/tanah', [TanahController::class, 'store'])->name('tanah.store');
    Route::get('/tanah/{id}/edit', [TanahController::class, 'edit'])->name('tanah.edit');
    Route::put('/tanah/{id}', [TanahController::class, 'update'])->name('tanah.update');
    Route::delete('/tanah/{id}', [TanahController::class, 'destroy'])->name('tanah.destroy');

    Route::get('/bangunan', [BangunanController::class, 'index'])->name('bangunan.index');
    Route::get('/bangunan/create', [BangunanController::class, 'create'])->name('bangunan.create');
    Route::post('/bangunan', [BangunanController::class, 'store'])->name('bangunan.store');
    Route::get('/bangunan/{id}/edit', [BangunanController::class, 'edit'])->name('bangunan.edit');
    Route::put('/bangunan/{id}', [BangunanController::class, 'update'])->name('bangunan.update');
    Route::delete('/bangunan/{id}', [BangunanController::class, 'destroy'])->name('bangunan.destroy');

    Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan.index');
    Route::get('/ruangan/create', [RuanganController::class, 'create'])->name('ruangan.create');
    Route::post('/ruangan', [RuanganController::class, 'store'])->name('ruangan.store');
    Route::get('/ruangan/{id}/edit', [RuanganController::class, 'edit'])->name('ruangan.edit');
    Route::put('/ruangan/{id}', [RuanganController::class, 'update'])->name('ruangan.update');
    Route::delete('/ruangan/{id}', [RuanganController::class, 'destroy'])->name('ruangan.destroy');

    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

    Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
    Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
});

// Admin Only Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});
