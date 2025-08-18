<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class productsController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'store'])->paginate();
        //SELECT * FROM products
        //SELECT * FROM categories WHERE id in (*)
        //SELECT * FROM store WHERE id IN (*)

        return view('dashboard.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->except('tags');
        $product = Product::create($data);

        $tags = json_decode($request->post('tags'));
        $tag_ids = [];

        $saved_tags = Tag::all();

        foreach ($tags as $item) {
            $slug = Str::slug($item->value);
            $tag = $saved_tags->where('slug', $slug)->first();
            if (!$tag) {
                $tag = Tag::create([
                    'name' => $item->value,
                    'slug' => $slug,
                ]);
            }
            $tag_ids[] = $tag->id;
        }

        $product->tags()->sync($tag_ids);

        return redirect()->route('dashboard.products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('dashboard.products.show', compact('product'));
    }

    public function edit($id)
    {

        $product = Product::findOrFail($id);

        // $tags = implode(',', $product->tags()->pluck('name')->toArray());
        // return view('dashboard.products.edit', compact('product', 'tags'));

        $product = Product::findOrFail($id);
        $tags = implode(',', $product->tags()->pluck('name')->toArray());
        $categories = Category::all();
        return view('dashboard.products.edit', compact('product', 'tags', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        // $product->update($request->except('tags'));

        // $tags = json_decode($request->post('tags'));// explode() exchng the sting to array 
        // $tag_ids = [];

        // $saved_tags = Tag::all();

        // foreach ( $tags as $t_name ) {
        //     $slug = Str::slug($t_name->value);
        //     $tag = $saved_tags->where('slug', $slug)->first();

        //     if (!$tag) {
        //         $tag = Tag::create([
        //             'name' => $t_name->value,
        //             'slug' => $slug,
        //         ]);
        //     }
        //     $tag_ids[] = $tag->id;
        // }

        // $product->tags()->sync($tag_ids);

        // return Redirect()->route('dashboard.products.index')
        //     ->with('success', 'Product update');
        $product->update($request->except('tags'));

        $tags = json_decode($request->post('tags'));
        $tag_ids = [];

        $saved_tags = Tag::all();

        foreach ($tags as $item) {
            $slug = Str::slug($item->value);
            $tag = $saved_tags->where('slug', $slug)->first();
            if (!$tag) {
                $tag = Tag::create([
                    'name' => $item->value,
                    'slug' => $slug,
                ]);
            }
            $tag_ids[] = $tag->id;
        }

        $product->tags()->sync($tag_ids);

        return redirect()->route('dashboard.products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('dashboard.products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
