<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\{
    Http\Controllers\Controller, Models\Category, Models\Option, Models\Product, ProductsImages
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
    public function create(Product $product)
    {
        $categories = Category::where('active', 1)
            ->where('parent_id', '!=',0)
            ->get()->sortBy('parent_id');

        foreach ($categories as $category){
            if($category->parent_id == 1)
                $category->name = $category->name. ' (Женщины)';
            if($category->parent_id == 2)
                $category->name = $category->name. ' (Мужчины)';
            if($category->parent_id == 3)
                $category->name = $category->name. ' (Дети)';
        }
        $categories = $categories->pluck('name', 'id');

        return view('back.products.create', compact('product','categories'));
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
        if(isset($request['main']))
            $request['main'] = true;

        $product = new Product();

        $product->fill($request->all());
        $product->slug = str_slug($request->get('name'), "-");

        $product->save();

        $request['options'] = [
            ['article' => '123456', 'color_id' => 2, 'size_id' => 1],
            ['article' => '765432', 'color_id' => 2, 'size_id' => 2],
            ['article' => '765435', 'color_id' => 2, 'size_id' => 3],
        ];
        foreach($request['options'] as $option_data) {
            $option = new Option();
            $option->product_id = $product->id;
            $option->fill($option_data);
            $option->save();
        }

        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');
            ProductsImages::create([
                'product_id' => $product->id,
                'img_src' => $filename
            ]);
        }

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
        if(isset($request['main']))
            $request['main'] = true;

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
