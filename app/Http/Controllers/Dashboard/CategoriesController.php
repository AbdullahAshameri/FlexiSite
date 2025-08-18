<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

    class CategoriesController extends Controller
    {
        public function index()
        {
            $request = request();
            
            // SELECT a.* FROM categories as a
            // INTER JOIN categories as b 
            $categories = Category::with('parent')
            
            /*leftJoin('categories as parents', 'parents.id', '=','categories.parent_id')
            ->select([
                'categories.*',
                'parents.name as parent_name'
            ])*/

            // ->select('categories.*')
            // ->selectRaw('(SELECT COUNT(*) FROM products WHERE category_id = categories.id) as products_count')
            ->withCount([
                'products as products_number' => function($query) {
                    $query->where('status', '=', 'active');
                }
            ])
            ->filter($request->query())
            ->orderBy('categories.name')
            ->withTrashed()
            // ->onlyTrashed()
            ->paginate();    // return collection object
            
            return view('dashboard.categories.index', compact('categories'));
        }

        public function create()
        {
            $parents = Category::all();
            $category = new Category();
            return view('dashboard.categories.create', compact('category', 'parents'));
        }

    public function store(Request $request)
    {
        $clean_data = $request->validate(Category::rules(), [
            'required' => 'This field :attribute is required',
            'unique' => 'This name already exists!',
        ]);

        $request->merge([
            'slug' => Str::slug($request->post('name'))
        ]);

        $data = $request->except('image');
        $data['image'] = $this->uploadImage($request);

        Category::create($data);

        return Redirect::route('dashboard.categories.index')
            ->with('success', 'Category created!');
    }

    public function show(Category $category)
    {
        return view('dashboard.categories.show', [
            'category' => $category
        ]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        if(!$category)
        {
           return Redirect::route('dashboard.categories.index')
            ->with('info', 'Record not found'); 
        }

        $parents = Category::where('id', '<>', $id)
            ->where(function ($query) use ($id) {
                $query->whereNull('parent_id')
                    ->orWhere('parent_id', '<>', $id);
            })
            ->get();

        return view('dashboard.categories.edit', compact('category', 'parents'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $old_image = $category->image;

        $data = $request->except('image');
        $new_image = $this->uploadImage($request);

        if ($new_image) {
            $data['image'] = $new_image;
        }

        $category->update($data);

        if ($old_image && $new_image) {
            Storage::disk('uploads')->delete($old_image);
        }

        return Redirect::route('dashboard.categories.index')
            ->with('success', 'Category updated!');
    }

    public function destroy(Category $category)
    {
        // $category = Category::findOrFail($id);
        $category->delete();

        // if ($category->image) {
        //     storage::disk('uploads')->delete($category->image);
        // }

        return Redirect::route('dashboard.categories.index')
            ->with('success', 'Category deleted!');
    }

    protected function uploadImage(Request $request)
    {
        if (!$request->hasFile('image')) {
            return null;
        }

        return $request->file('image')->store('uploads', [
            'disk' => 'uploads'
        ]);
    }
    public function trash()
    {
        $categories = Category::onlyTrashed()->paginate();
        return view('dashboard.categories.trash', compact('categories'));
    }

    public function restore(Request $request, $id)
    {
        $category = Category::onlyTrashed()->findOrfail($id);
        $category->restore();

        return redirect()->route('dashboard.categories.trash')
            ->with('succes', 'Category restored!');
    }
    public function forceDelete($id)
    {
        $category = Category::onlyTrashed()->findOrfail($id);
        $category->forceDelete();

        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        return redirect()->route('dashboard.categories.trash')
            ->with('succes', 'Category delete forever!');
    }
}