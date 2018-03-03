<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartComposer
{

    protected $cart;

    /**
     * Create a new profile composer.
     *
     * @param Cart $cart
     */
    public function __construct(Cart $cart)
    {
        // Dependencies automatically resolved by service container...
        $this->cart = $cart;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('cart', $this->cart);
    }
}