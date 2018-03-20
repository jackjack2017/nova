<?php

namespace App\Http\Controllers\Back;


use App\ {
    Http\Controllers\Controller,
    Models\Category
};
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Display list of models
     */
    public function index()
    {
        $categories = Category::where('parent_id', '!=', 0)->with('parentCategories')->get();

        return view('back.categories.index', compact('categories'));
    }



    /**
     * Show the form for creating a new model.
     */
    public function create()
    {
        $parent_categories = Category::where('parent_id', 0)->pluck('name', 'id');
        return view('back.categories.create', compact('parent_categories'));
    }

    /**
     * Create a new model
     * @param Request $request
     * @return
     */
    public function store(Request $request)
    {
        Category::create([
            'active' => isset($request['active']) ? true : false,
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'slug'=> str_slug($request->get('name'). ' ' .$request->get('parent_id'), "-"),
            'parent_id' => $request->get('parent_id'),
        ]);

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
     * @param Request $request
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update([
            'active' => isset($request['active']) ? true : false,
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'slug'=> str_slug($request->get('name'), "-")
        ]);

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

        return  redirect(route('categories.index'));
    }
}
