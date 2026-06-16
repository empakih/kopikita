<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sensor;
use App\Models\Feature;
use App\Models\Product;
use App\Models\Article;
use App\Models\HeroSlide;
use App\Models\ContactMessage;

class HomeController extends Controller
{
    public function index()
    {
        $heroSlides = HeroSlide::where('is_active', true)->orderBy('order_index')->get();
        $sensors = Sensor::where('is_active', true)->get();
        $features = Feature::where('is_active', true)->orderBy('order_index')->get();
        $products = Product::latest()->take(3)->get();
        $articles = Article::latest('published_at')->take(3)->get();
        $faqs = \App\Models\Faq::where('is_active', true)
                                ->where('category', 'Umum')
                                ->take(5)
                                ->get();

        return view('home', compact('heroSlides', 'sensors', 'features', 'products', 'articles', 'faqs'));
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'greenhouse_name' => 'nullable|string|max:255',
            'greenhouse_location' => 'nullable|string|max:255',
            'subject' => 'required|string|max:100',
            'message' => 'required|string',
        ]);

        ContactMessage::create($validated);

        return response()->json(['success' => true, 'message' => 'Pesan Anda berhasil dikirim! Tim kami akan segera menghubungi Anda.']);
    }
}
