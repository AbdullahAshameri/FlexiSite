<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class HearingArticle extends Model
{
    protected $fillable = ['title', 'slug', 'image', 'content'];

    // Accessor للوصول للصورة بسهولة
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('uploads/' . $this->image) : null;
    }

    // Rules method لتسهيل validation
    public static function rules($id = null)
    {
        return [
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('hearing_articles', 'title')->ignore($id),
            ],
            // slug ما عاد مطلوب من الفورم لأنه يتولد تلقائي
            'slug' => [
                'string',
                'max:255',
                Rule::unique('hearing_articles', 'slug')->ignore($id),
            ],
            'image' => 'nullable|image|max:2048',
            'content' => 'required|string',
        ];
    }

    // توليد slug تلقائيًا قبل الحفظ
    protected static function booted()
    {
        static::creating(function ($article) {
            // إذا ما تم تمرير slug → يتولد من العنوان
            if (empty($article->slug)) {
                $article->slug = self::generateUniqueSlug($article->title);
            }
        });

        static::updating(function ($article) {
            // إذا slug فاضي أو تم تعديل العنوان → يتولد من جديد
            if (empty($article->slug)) {
                $article->slug = self::generateUniqueSlug($article->title, $article->id);
            }
        });
    }

    // دالة لتوليد slug فريد
    public static function generateUniqueSlug($title, $ignoreId = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (self::where('slug', $slug)
            ->when($ignoreId, function ($query) use ($ignoreId) {
                $query->where('id', '!=', $ignoreId);
            })
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter++;
        }

        return $slug;
    }
}
