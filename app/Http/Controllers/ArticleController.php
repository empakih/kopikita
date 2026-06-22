<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest('published_at')->orderByDesc('id')->get();
        $categories = Article::whereNotNull('category')->distinct()->pluck('category');

        return view('artikel', compact('articles', 'categories'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $relatedArticles = Article::where('id', '!=', $article->id)
            ->whereNotNull('slug')
            ->latest('published_at')
            ->take(2)
            ->get();

        return view('artikel-detail', compact('article', 'relatedArticles'));
    }
}
