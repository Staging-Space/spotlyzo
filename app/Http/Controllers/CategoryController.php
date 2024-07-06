<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.categories.index', [
            'categories' => Category::latest()->get(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('app.categories.show', [
            'category' => $category,
        ]);
    }
}
