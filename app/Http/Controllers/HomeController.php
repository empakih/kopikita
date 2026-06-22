<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        // Beranda: produk unggulan (bestseller dulu) + artikel terbaru.
        $products = Product::orderByDesc('is_bestseller')->latest()->take(3)->get();
        $articles = Article::latest('published_at')->take(3)->get();

        return view('home', compact('products', 'articles'));
    }
}
