<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;
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
        $boxSize = 0;

        Facades\View::composer('includes.sidebar.categories', function (View $view) {
            return $view
                ->with('categories', Category::all());
        });

        Facades\View::composer('*', function (View $view) use ($boxSize) {
            $id = Auth::id();
            if($id) {
                $currentOrder = Order::getCurrentOrder($id);
                if($currentOrder) {
                    $boxSize = sizeof($currentOrder->goods);
                }
            }
            return $view
                ->with('boxSize', $boxSize);
        });
    }
}
