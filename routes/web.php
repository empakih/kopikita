<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Product;
use App\Models\Article;

// Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// Katalog produk — semua produk dikirim sekaligus, filter kategori dilakukan di browser (JS)
Route::get('/katalog', function () {
    $products = Product::orderBy('created_at', 'desc')->get();

    // Daftar kategori unik untuk tombol filter
    $categories = Product::whereNotNull('category')
        ->select('category')
        ->distinct()
        ->pluck('category');

    return view('katalog', compact('products', 'categories'));
})->name('katalog');

// Detail menu
Route::get('/katalog/{id}', function ($id) {
    $product = Product::findOrFail($id);
    return view('product-detail', compact('product'));
})->name('product-detail');

// Daftar artikel — semua artikel dikirim sekaligus, filter kategori dilakukan di browser (JS)
Route::get('/artikel', function () {
    $articles = Article::latest('published_at')->latest()->get();

    $categories = Article::whereNotNull('category')
        ->select('category')
        ->distinct()
        ->pluck('category');

    return view('artikel', compact('articles', 'categories'));
})->name('artikel');

// Detail artikel
Route::get('/artikel/{slug}', function ($slug) {
    $article = Article::where('slug', $slug)->firstOrFail();
    $relatedArticles = Article::where('id', '!=', $article->id)
        ->latest('published_at')
        ->take(2)
        ->get();

    return view('artikel-detail', compact('article', 'relatedArticles'));
})->name('artikel.detail');

// Halaman statis (tanpa database)
Route::view('/kontak', 'konsultasi')->name('konsultasi');
Route::view('/faq', 'faq')->name('faq');
