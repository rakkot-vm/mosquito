<?php

namespace App\Providers;

use App\Http\Helpers\ValueHelper;
use App\Http\Helpers\ImgHelper;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('valueHelper', new ValueHelper);
        View::share('imgHelper', new ImgHelper);
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
}
