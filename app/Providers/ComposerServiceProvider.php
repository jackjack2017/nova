<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            ['parts._header', 'favourite', 'product', 'category'], 'App\Http\ViewComposers\CartComposer'
        );
        View::composer(
            ['parts._header', 'blocks._sidebar-menu'], 'App\Http\ViewComposers\MenuComposer'
        );

        View::composer(
            'back/layout', 'App\Http\ViewComposers\HeaderComposer'
        );

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}