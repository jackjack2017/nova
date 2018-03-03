<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = Product::find($request->get('product_id'));
        Cart::add($product, 1);

        return $this->getCart();
    }


    public function getCart()
    {
        $cart = Cart::content();
        return view('', compact('cart'));
    }
}