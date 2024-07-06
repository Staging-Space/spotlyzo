<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.admin.categories.index', [
            'categories' => Category::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        $inputs = $request->validated();
        $image = $request->file('image');
        $imageName = $image->hashName();

        Storage::putFileAs('categories', $image, $imageName);

        $category = Category::create([
            'slug' => str($inputs['title'])->slug() . '-' . time(),
            'title' => $inputs['title'],
            'description' => $inputs['description'],
            'image' => $imageName,
        ]);

        return redirect()->route('admin.categories.index')->with([
            'success' => 'The category is created.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('app.admin.categories.show', [
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $inputs = $request->validated();

        $category->update([
            'slug' => str($inputs['title'])->slug() . '-' . time(),
            'title' => $inputs['title'],
            'description' => $inputs['description'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();

            Storage::putFileAs('categories', $image, $imageName);

            $category->update([
                'image' => $imageName,
            ]);
        }

        return redirect()->route('admin.categories.show', $category)->with([
            'success' => 'The category is updated.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with([
            'success' => 'The category is deleted.',
        ]);
    }
}
