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
        return view('dashboard.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.products.create', compact('categories'));
    }

    // public function store(Request $request)
    // {
    //     $data = $request->except('tags');

    //     // اربط المنتج بالمتجر الخاص بالمستخدم الحالي
    //     $data['store_id'] = Auth::user()->store_id;

    //     // توليد slug من الاسم
    //     $data['slug'] = Str::slug($data['name']);

    //     $product = Product::create($data);

    //     // التعامل مع التاجز
    //     $tags = json_decode($request->post('tags'));
    //     $tag_ids = [];

    //     $saved_tags = Tag::all();

    //     foreach ($tags as $item) {
    //         $slug = Str::slug($item->value);
    //         $tag = $saved_tags->where('slug', $slug)->first();
    //         if (!$tag) {
    //             $tag = Tag::create([
    //                 'name' => $item->value,
    //                 'slug' => $slug,
    //             ]);
    //         }
    //         $tag_ids[] = $tag->id;
    //     }

    //     $product->tags()->sync($tag_ids);

    //     return redirect()->route('dashboard.products.index')
    //         ->with('success', 'Product created successfully.');
    // }
    // public function store(Request $request)
    // {
    //     $data = $request->except('tags');

    //     // اربط المنتج بالمتجر الخاص بالمستخدم الحالي
    //     $data['store_id'] = Auth::user()->store_id;

    //     // توليد slug فريد من الاسم
    //     $slug = Str::slug($data['name']);
    //     $originalSlug = $slug;
    //     $counter = 1;
    //     while (Product::where('slug', $slug)->exists()) {
    //         $slug = $originalSlug . '-' . $counter++;
    //     }
    //     $data['slug'] = $slug;

    //     // إنشاء المنتج
    //     $product = Product::create($data);

    //     // التعامل مع التاجز
    //     $tags = json_decode($request->post('tags')) ?? []; // دائمًا مصفوفة
    //     $tag_ids = [];
    //     $saved_tags = Tag::all();

    //     foreach ($tags as $item) {
    //         $tagSlug = Str::slug($item->value);
    //         $tag = $saved_tags->where('slug', $tagSlug)->first();
    //         if (!$tag) {
    //             $tag = Tag::create([
    //                 'name' => $item->value,
    //                 'slug' => $tagSlug,
    //             ]);
    //         }
    //         $tag_ids[] = $tag->id;
    //     }

    //     $product->tags()->sync($tag_ids);

    //     return redirect()->route('dashboard.products.index')
    //         ->with('success', 'Product created successfully.');
    // }
    public function store(Request $request)
    {
        $data = $request->except('tags');

        // ربط المنتج بالمتجر الحالي
        $data['store_id'] = Auth::user()->store_id;

        // رفع الصورة إذا تم اختيارها
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');

            // إنشاء اسم فريد للملف لتجنب أي تعارض
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))
                . '.' . $file->getClientOriginalExtension();

            // رفع الصورة داخل storage/app/public/uploads
            $path = $file->storeAs('uploads', $filename, 'public');

            $data['image'] = $path; // path سيكون uploads/filename.ext
        }

        // توليد slug فريد
        $slug = Str::slug($data['name']);
        $originalSlug = $slug;
        $counter = 1;
        while (Product::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }
        $data['slug'] = $slug;

        // إنشاء المنتج
        $product = Product::create($data);

        // التعامل مع التاجز
        $tags = json_decode($request->post('tags')) ?? [];
        $tag_ids = [];
        $saved_tags = Tag::all();

        foreach ($tags as $item) {
            $tagSlug = Str::slug($item->value);
            $tag = $saved_tags->where('slug', $tagSlug)->first();
            if (!$tag) {
                $tag = Tag::create([
                    'name' => $item->value,
                    'slug' => $tagSlug,
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
        $tags = implode(',', $product->tags()->pluck('name')->toArray());
        $categories = Category::all();
        return view('dashboard.products.edit', compact('product', 'tags', 'categories'));
    }

    // public function update(Request $request, Product $product)
    // {
    //     $data = $request->except('tags');

    //     // تحديث slug مع الاسم الجديد
    //     $data['slug'] = Str::slug($data['name']);

    //     $product->update($data);

    //     $tags = json_decode($request->post('tags'));
    //     $tag_ids = [];

    //     $saved_tags = Tag::all();

    //     foreach ($tags as $item) {
    //         $slug = Str::slug($item->value);
    //         $tag = $saved_tags->where('slug', $slug)->first();
    //         if (!$tag) {
    //             $tag = Tag::create([
    //                 'name' => $item->value,
    //                 'slug' => $slug,
    //             ]);
    //         }
    //         $tag_ids[] = $tag->id;
    //     }

    //     $product->tags()->sync($tag_ids);

    //     return redirect()->route('dashboard.products.index')
    //         ->with('success', 'Product updated successfully.');
    // }
    // public function update(Request $request, Product $product)
    // {
    //     $data = $request->except('tags');

    //     // توليد slug فريد
    //     $slug = Str::slug($data['name']);
    //     $originalSlug = $slug;
    //     $counter = 1;
    //     while (Product::where('slug', $slug)->where('id', '!=', $product->id)->exists()) {
    //         $slug = $originalSlug . '-' . $counter++;
    //     }
    //     $data['slug'] = $slug;

    //     $product->update($data);

    //     // التعامل مع التاجز
    //     $tags = json_decode($request->post('tags')) ?? [];
    //     $tag_ids = [];
    //     $saved_tags = Tag::all();

    //     foreach ($tags as $item) {
    //         $slug = Str::slug($item->value);
    //         $tag = $saved_tags->where('slug', $slug)->first();
    //         if (!$tag) {
    //             $tag = Tag::create([
    //                 'name' => $item->value,
    //                 'slug' => $slug,
    //             ]);
    //         }
    //         $tag_ids[] = $tag->id;
    //     }

    //     $product->tags()->sync($tag_ids);

    //     return redirect()->route('dashboard.products.index')
    //         ->with('success', 'Product updated successfully.');
    // }
    public function update(Request $request, Product $product)
    {
        $data = $request->except('tags');

        // رفع الصورة إذا تم اختيارها
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();

            // تخزين الصورة باستخدام Storage
            $path = $file->storeAs('uploads', $filename, 'public');

            $data['image'] = $path;
        }

        // توليد slug فريد
        $slug = Str::slug($data['name']);
        $originalSlug = $slug;
        $counter = 1;

        while (Product::where('slug', $slug)->where('id', '!=', $product->id)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        $data['slug'] = $slug;

        $product->update($data);

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
