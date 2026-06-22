<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Produk
Route::get('/katalog', [ProductController::class, 'index'])->name('katalog');
Route::get('/katalog/{id}', [ProductController::class, 'show'])->whereNumber('id')->name('product-detail');

// Artikel
Route::get('/artikel', [ArticleController::class, 'index'])->name('artikel');
Route::get('/artikel/{slug}', [ArticleController::class, 'show'])->name('artikel.detail');

// Halaman statis
Route::view('/kontak', 'konsultasi')->name('konsultasi');
Route::view('/faq', 'faq')->name('faq');
