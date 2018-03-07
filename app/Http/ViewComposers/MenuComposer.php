<?php

namespace App\Http\ViewComposers;

use App\Models\Product;
use Illuminate\View\View;
use App\Models\Category;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $products = Product::all();
        $categories = Category::pluck('name', 'id');
        dd($categories);
        foreach ($products as $product){
            if($product->gender == 0){

            }
        }
        $view->with('categories', Category::select('title', 'slug')->get());
    }
}
