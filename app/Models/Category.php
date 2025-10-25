<?php

namespace App\Models;

use App\Rules\Filter;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable= [
        'name', 'parent_id', 'description', 'image', 'status', 'slug' 
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function scopeActive(EloquentBuilder $builder, $filters)
    {
        $builder->where('status', '=', 'active');
    }
    public function scopeFilter(EloquentBuilder $builder, $filters)
    {
        $builder->when($filters['name'] ?? false, function($builder, $value) {
            $builder->where('categories.name', 'LIKE', "%{$value}%");
        });
        $builder->when($filters['status'] ?? false, function($builder, $value) {
            $builder->where('categories.status', '=', "%{$value}%");
        });

    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id')
            ->withDefault([
                'name' => '-'
            ]);
    }

    public function children()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public static function rules($id = 0)
    {
        return [
            'name' =>[
                'required',
                'string',
                'min:3',
                'max:255',
                "unique:categories,name,$id",
                // function($attribute, $value, $fails){
                //     if(strtolower($value) == 'laravel') {
                //         $fails('This name is forbidden!');
                //     }
                // },
                'filter:php,laravel,html',
                // new Filter(['php','laravel','css']),
            ],
            'parent_id' =>[
                 'nullable','int', 'exists:categories,id'
            ],
            'image' => [
                'image', 'max:1024000', 'Dimensions:min_width:100,min_height=100'
            ],
            'status' => [
                'in:active,archived',
            ],
        ];
    }

}