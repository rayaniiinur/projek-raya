<?php

use App\Http\Controllers\TanahController;
use App\Http\Controllers\BangunanController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
// use App\Models\Barang; ini dihapus
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return view('tanah/index');
});

// Route::get('/barang', function () {
//     return view('data', [
//         'title' => 'Barang',
//         'items' => Barang::all(),
//     ]);
// });

// Ganti jadi ini!
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

Route::middleware([\App\Http\Middleware\IsAdmin::class])->group(function () {
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [\App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [\App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
        });
