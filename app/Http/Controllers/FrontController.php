<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Back\CartController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        $new = Product::where('new',1)->get();
        $top = Product::where('top',1)->get();
        return view('main', compact('new', 'top'));
    }

    public function page($id = null)
    {
        if($id){
            $category = Category::find($id);
            $new = Product::where('gender', $id)->where('new',1)->get();

            return view('page', compact('category', 'new'));
        }
    }

    public function favourite(Request $request)
    {
        $ids = $request->session()->get('likes');

        $ids ? $likes = Product::whereIn('id', $ids)->get() : $likes = [];
        $top = Product::where('top',1)->get();

        return view('favourite', compact('likes', 'top'));
    }

    public function category($category_id)
    {
        $category = Category::find($category_id);
        $products = Product::where('category_id', $category_id)->where('active', 1)->paginate(12);

        return view('category', compact('category','products'));
    }


    public function product($product_slug, $product_id, CartController $cartController)
    {
        $product = Product::findOrFail($product_id);
//        $same_products = $product->products()->get();

        $cartController->viewed($product_id);
        return view('product', compact('product', 'same_products'));
    }


}