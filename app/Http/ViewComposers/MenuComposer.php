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
        $categories = Category::where('parent_id', 0)->with('subCategories')->get();

        $view->with('categories', $categories);
    }
}
