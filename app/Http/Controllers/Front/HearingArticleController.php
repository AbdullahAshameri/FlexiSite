<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\HearingArticle;
use Illuminate\Http\Request;

class HearingArticleController extends Controller
{
    // الصفحة الرئيسية: عرض 3 مقالات فقط مع زر الذهاب لكل المقالات
    // public function index()
    // {
    //     $articles = HearingArticle::latest()->take(3)->get();
    //     return view('front.home', compact('articles'));
    // }

    // صفحة عرض كل المقالات (blog-grid-sidebar)
    public function all()
    {
        $articles = HearingArticle::latest()->paginate(6);
        return view('front.blog.blog-grid-sidebar', compact('articles'));
    }

    public function show($id)
    {
        $article = HearingArticle::findOrFail($id);
        return view('front.blog.blog-single', compact('article'));
    }
}
