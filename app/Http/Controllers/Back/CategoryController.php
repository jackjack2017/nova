<?php

namespace App\Http\Controllers\Back;


use App\ {
    Http\Controllers\Controller,
    Http\Requests\CategoryRequest as Request,
    Models\Category
};

class CategoryController extends Controller
{
    /**
     * Display list of models
     */
    public function index()
    {
        $categories = Category::oldest('title')->get();

        return view('back.categories.index', compact('categories'));
    }



    /**
     * Show the form for creating a new model.
     */
    public function create()
    {
        return view('back.categories.create');
    }

    /**
     * Create a new model
     * @param Request $request
     * @return
     */
    public function store(Request $request)
    {
        Category::create($request->all());

        return view('back.categories.index')->with('category-ok', __('The category has been successfully created'));
    }


    /**
     * Show the form for editing the specified model.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('back.categories.edit', compact('category'));
    }

    /**
     * Update the specified model in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest $request
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());

        return redirect(route('categories.index'))->with('category-ok', __('The category has been successfully updated'));
    }

    /**
     * Remove the specified categorie from storage.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json();
    }
}
