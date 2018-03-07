<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{


    public function category()
    {
        $products = Product::where('category_id', 4)->where('active', 1)->where('main', 1)->get();
        return view('category', compact('products'));
    }


    public function product($product_id)
    {
        $product = Product::findOrFail($product_id);
        $same_products = $product->products()->get();
        return view('product', compact('product', 'same_products'));
    }
}