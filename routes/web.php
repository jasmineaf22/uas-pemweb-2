<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController; // Import the KategoriController
use App\Http\Controllers\PinjamController; // Import the PinjamController

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
    return view('login');
});

// Grup middleware untuk rute yang hanya dapat diakses oleh guest
Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
});

// Grup middleware untuk rute yang hanya dapat diakses oleh pengguna yang sudah terautentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/table', [BukuController::class, 'show'])->name('table');
    Route::get('/add-kategori', [KategoriController::class, 'show'])->name('add-kategori');
    Route::post('/add-kategori', [KategoriController::class, 'store'])->name('add-kategori.store');
    Route::get('/form', [BukuController::class, 'create'])->name('form');
    Route::post('/submit-form', [BukuController::class, 'store'])->name('submit-form');
    Route::get('/kategori', [BukuController::class, 'kategory'])->name('kategori');
    Route::delete('/buku/{buku}', [BukuController::class, 'destroy'])->name('buku.destroy');
    Route::put('/buku/{buku}', [BukuController::class, 'update'])->name('buku.update');
    Route::get('/buku/{buku}/edit', [BukuController::class, 'edit'])->name('buku.edit');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/list', [PinjamController::class, 'index'])->name('pinjam.index');
    Route::get('/pinjam', [PinjamController::class, 'create'])->name('pinjam.create');
    Route::post('/pinjam', [PinjamController::class, 'store'])->name('pinjam.store');
    Route::put('/pinjam/{pinjam}', [PinjamController::class, 'update'])->name('pinjam.update');
    Route::get('/pinjam/{pinjam}/edit', [PinjamController::class, 'edit'])->name('pinjam.edit');
    Route::delete('/pinjam/{pinjam}', [PinjamController::class, 'destroy'])->name('pinjam.destroy');
});
