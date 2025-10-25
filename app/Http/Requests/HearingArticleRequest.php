<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HearingArticleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->route('hearing_article')?->id;

        return [
            'title' => 'required|string|max:255|unique:hearing_articles,title,' . $id,
            'image' => 'nullable|image|max:2048',
            'content' => 'required|string',
        ];
    }
}
