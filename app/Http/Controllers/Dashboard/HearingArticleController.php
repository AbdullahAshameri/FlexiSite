<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\HearingArticle;
use Illuminate\Http\Request;

class HearingArticleController extends Controller
{
    public function index()
    {
        $articles = HearingArticle::paginate(10);
        return view('dashboard.hearing_articles.index', compact('articles'));
    }

    public function create()
    {
        return view('dashboard.hearing_articles.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255|unique:hearing_articles,title',
            'image' => 'nullable|image|max:2048',
            'content' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('hearing_articles', 'public');
        }

        HearingArticle::create($data);

        return redirect()->route('dashboard.hearing_articles.index')
            ->with('success', 'Article created successfully.');
    }




    public function edit(HearingArticle $hearing_article)
    {
        return view('dashboard.hearing_articles.edit', ['article' => $hearing_article]);
    }

    public function update(Request $request, HearingArticle $hearing_article)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255|unique:hearing_articles,title,' . $hearing_article->id,
            'image' => 'nullable|image|max:2048',
            'content' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('hearing_articles', 'public');
        }

        $hearing_article->update($data);

        return redirect()->route('dashboard.hearing_articles.index')
            ->with('success', 'Article updated successfully.');
    }


    public function destroy(HearingArticle $hearing_article)
    {
        $hearing_article->delete();

        return redirect()->route('dashboard.hearing_articles.index')
            ->with('success', 'تم حذف المقال بنجاح');
    }
}
