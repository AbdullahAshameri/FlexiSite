<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\HearingArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\HearingArticleRequest;
use Illuminate\Support\Facades\Redirect;

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

    public function store(HearingArticleRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('hearing_articles', 'uploads');
        }

        HearingArticle::create($data);

        return Redirect::route('dashboard.hearing_articles.index')
            ->with('success', 'Article created successfully.');
    }

    public function edit(HearingArticle $hearing_article)
    {
        return view('dashboard.hearing_articles.edit', ['article' => $hearing_article]);
    }

    public function update(HearingArticleRequest $request, HearingArticle $hearing_article)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($hearing_article->image) {
                Storage::disk('uploads')->delete($hearing_article->image);
            }
            $data['image'] = $request->file('image')->store('hearing_articles', 'uploads');
        }

        $hearing_article->update($data);

        return Redirect::route('dashboard.hearing_articles.index')
            ->with('success', 'Article updated successfully.');
    }

    public function destroy(HearingArticle $hearing_article)
    {
        if ($hearing_article->image) {
            Storage::disk('uploads')->delete($hearing_article->image);
        }

        $hearing_article->delete();

        return Redirect::route('dashboard.hearing_articles.index')
            ->with('success', 'تم حذف المقال بنجاح');
    }
}
