<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\MenuComposer;
use App\Http\ViewComposers\HeaderComposer;
use Laravel\Dusk\DuskServiceProvider;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use App\Generators\FormGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(FormGenerator $formGenerator)
    {
        setLocale(LC_TIME, config('app.locale'));

        Blade::if('admin', function () {
            return auth()->user()->role === 'admin';
        });

        $this->bodyClassShare();


        view()->share('form', $formGenerator);

//               Blade::if('request', function ($url) {
//            return request()->is($url);
//        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Prepare and share body class
     */
    protected function bodyClassShare()
    {
        $request = request();

        if($request->path() === '/'){
            $body_class = 'page-index';
        } else {
            $body_class = 'page-' . str_replace('/', '-', $request->path());
        }

        view()->share('body_class', $body_class);
    }
}
