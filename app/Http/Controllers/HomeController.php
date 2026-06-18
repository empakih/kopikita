<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        // Halaman utama hanya butuh 2 data: menu terbaru & artikel terbaru.
        $products = Product::latest()->take(3)->get();
        $articles = Article::latest('published_at')->take(3)->get();

        return view('home', compact('products', 'articles'));
    }
}
