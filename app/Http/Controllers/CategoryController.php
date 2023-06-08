<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();

        return view("admin.category.index", [
            'categories' => $categories
        ]);
    }

    public function show($id)
    {
        $category = Category::find($id);

        return view('admin.category.show', [
            'category' => $category
        ]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->title = $request->title;
        $category->save();

        return redirect()->route('admin.category.index');
    }

    public function edit($id) {
        $category = Category::find($id);

        if (! $category) {
            abort(404);
        }

        return view('admin.category.edit', [
            'category_detail' => $category
        ]);
    }

    public function update(Request $request, $id) {
        $category = Category::find($id);

        $category->title = $request->title;
        $category->save();

        return redirect()->back();
    }
}
