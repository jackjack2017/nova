<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\{
    Http\Controllers\Controller, Http\Requests, Models\Category, Product
};

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index($gender)
    {
//        $products = Product::where('gender', $gender)->get();
        $products = Product::all();

        return view('back.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.products.create');
    }

    /**
     * Store a newly created categorie in storage.
     *
     * @param  \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect(route('products.index'))->with('product-ok', __('The product has been successfully created'));
    }

    /**
     * Show the form for editing the specified categorie.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('back.products.edit', compact('product'));
    }

    /**
     * Update the specified categorie in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest $request
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect(route('categories.index'))->with('category-ok', __('The category has been successfully updated'));
    }

    /**
     * Remove the specified categorie from storage.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json();
    }
}
