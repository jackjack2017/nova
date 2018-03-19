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
        $cart_item = [
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => [
                'size' => $product->size,
                'color' => $product->color,
                'artcile' => $product->article,
            ]
        ];
        Cart::add($cart_item);

        return $this->getAll();
    }


    public function getAll()
    {
        $cart = Cart::content();
        $total = Cart::subtotal();
       
        return view('parts/_header-cart', compact('cart', 'total'));
    }


    public function remove(Request $request)
    {
        Cart::remove($request->get('item_id'));
        return true;

//        $remove = Cart::remove($request->get('item_id'));
//
//        if($remove){
//            return true;
//        }
//
//        return false;
    }

    public function destroy()
    {
        Cart::destroy();
        return $this->getAll();
    }
}