<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades;
use Illuminate\View\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Facades\View::composer('includes.sidebar.categories', function (View $view) {
            return $view->with('categories', Category::all());
        });
    }
}
