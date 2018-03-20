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
        Cart::instance('shopping')->add($cart_item);

        return $this->getAll();
    }


    public function getAll()
    {
        $cart = Cart::instance('shopping')->content();
        $total = Cart::instance('shopping')->subtotal();

        return view('parts/_header-cart', compact('cart', 'total'));
    }


    public function remove(Request $request)
    {
       Cart::instance('shopping')->remove($request->get('item_id'));
       return $this->getAll();;

    }

    public function destroy()
    {
        Cart::instance('shopping')->destroy();
        return $this->getAll();
    }


    public function like(Request $request)
    {
        $id = $request->get('product_id');

        $item = Cart::instance('wishlist')->search(function ($cartItem) use ($id) {
            return $cartItem->id == $id;
        })->first();

        if ($item) {
            Cart::instance('wishlist')->remove($item->rowId);
        } else {

            $product = Product::find($id);
            $cart_item = [
                'id' => $product->id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->price,
                'options' => [
                    'size' => $product->size,
                    'color' => $product->color,
                    'artcile' => $product->article,
                    'new' => $product->new,
                    'top' => $product->top,
                    'discount' => $product->discount,
                    'slug' => $product->slug,
                ]
            ];
            Cart::instance('wishlist')->add($cart_item);
        }

    }

    public function viewed($product_id)
    {
        $product = Product::find($product_id);
        $cart_item = [
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => [
                'size' => $product->size,
                'color' => $product->color,
                'artcile' => $product->article,
                'new' => $product->new,
                'top' => $product->top,
                'discount' => $product->discount,
                'slug' => $product->slug,
            ]
        ];
        Cart::instance('viewed')->add($cart_item);
    }
}