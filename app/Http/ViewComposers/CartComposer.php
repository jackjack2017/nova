<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $cart = Cart::instance('shopping')->content();
        $total = Cart::instance('shopping')->subtotal();
        $cart_count = Cart::instance('shopping')->count();

        $wishlist = Cart::instance('wishlist')->content();
        $wishlist_ids = $wishlist->groupBy('id')->keys()->toArray();

        $wishlist_count = Cart::instance('wishlist')->count();

        $viewed = Cart::instance('viewed')->content();

        $view->with(compact('cart', 'total', 'cart_count', 'wishlist', 'wishlist_count', 'wishlist_ids', 'viewed'));
    }
}