<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\{
    Http\Controllers\Controller, Models\Category, Models\Product
};

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all()->pluck('name', 'id');

        return view('back.products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('active', 1)->get()->pluck('name', 'id');

        return view('back.products.create', compact('categories'));
    }

    /**
     * Store a newly created categorie in storage.
     *
     * @param  \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($request['active']))
            $request['active'] = true;
        if(isset($request['top']))
            $request['top'] = true;
        if(isset($request['new']))
            $request['new'] = true;

        $product = new Product();

        $product->fill($request->all());
        $product->slug = str_slug($request->get('name'), "-");

        $product->save();

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
        $categories = Category::where('active', 1)->get()->pluck('name', 'id');
        return view('back.products.edit', compact('product', 'categories'));
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
        if(isset($request['active']))
            $request['active'] = true;
        if(isset($request['top']))
            $request['top'] = true;
        if(isset($request['new']))
            $request['new'] = true;

        $product->slug = str_slug($request->get('name'), "-");

        $product->update($request->all());

        return redirect(route('products.index'))->with('product-ok', __('The product has been successfully updated'));
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

        return redirect(route('products.index'));
    }
}
