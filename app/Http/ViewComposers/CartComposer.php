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
        $cart = Cart::content();
        $view->with('cart', $cart);
    }
}