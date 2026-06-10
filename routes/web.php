<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.submit');

Route::get('/katalog', function () {
    $category = request('category');
    $productsQuery = \App\Models\Product::orderBy('created_at', 'desc');
    
    if ($category && $category !== 'Semua') {
        $productsQuery->where('category', $category);
    }
    
    $products = $productsQuery->paginate(9)->withQueryString();
    
    // Ambil daftar kategori unik yang tidak null
    $categories = \App\Models\Product::whereNotNull('category')
        ->select('category')
        ->distinct()
        ->pluck('category');
        
    $faqs = \App\Models\Faq::where('category', 'Produk')->where('is_active', true)->get();
        
    return view('katalog', compact('products', 'categories', 'faqs', 'category'));
})->name('katalog');

Route::get('/katalog/{id}', function ($id) {
    $product = \App\Models\Product::findOrFail($id);
    return view('product-detail', compact('product'));
})->name('product-detail');

Route::get('/artikel', function (\Illuminate\Http\Request $request) {
    $category = $request->query('category');
    $query = \App\Models\Article::query()->latest('published_at')->latest();
    
    if ($category && $category !== 'Semua') {
        $query->where('category', $category);
    }
    
    $articles = $query->paginate(9)->withQueryString();
    
    $categories = \App\Models\Article::whereNotNull('category')
        ->select('category')
        ->distinct()
        ->pluck('category');
        
    $faqs = \App\Models\Faq::where('category', 'Artikel')->where('is_active', true)->get();
        
    return view('artikel', compact('articles', 'categories', 'category', 'faqs'));
})->name('artikel');

Route::get('/artikel/{slug}', function ($slug) {
    $article = \App\Models\Article::where('slug', $slug)->firstOrFail();
    $relatedArticles = \App\Models\Article::where('id', '!=', $article->id)
        ->latest('published_at')
        ->take(2)
        ->get();
        
    return view('artikel-detail', compact('article', 'relatedArticles'));
})->name('artikel.detail');

Route::get('/konsultasi', function () {
    return view('konsultasi');
})->name('konsultasi');

Route::get('/faq', function () {
    $categories = \App\Models\Faq::whereNotNull('category')
        ->where('is_active', true)
        ->select('category')
        ->distinct()
        ->pluck('category');
    
    $faqs = \App\Models\Faq::where('is_active', true)->get();
    
    return view('faq', compact('faqs', 'categories'));
})->name('faq');
