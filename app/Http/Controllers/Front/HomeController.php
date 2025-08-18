<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\HearingArticle;  // استدعاء موديل المقالات
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->active()
            ->limit(8)
            ->get();

        $articles = HearingArticle::latest()
            ->limit(3)
            ->get();

        return view('front.home', compact('products', 'articles'));
    }
}
