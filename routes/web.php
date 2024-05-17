<?php

use App\Models\Good;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::permanentRedirect('home', '/');
Route::get('categories/{category}', [GoodController::class, 'category'])->name('category');

Route::middleware('auth')->group(function() {
    Route::get('goods/{good}', [GoodController::class, 'show'])->name('good.show');
    
    Route::get('order/buy/{good}', [OrderController::class, 'buy'])->name('order.buy');
    Route::get('order/current', [OrderController::class, 'current'])->name('order.current');
    Route::get('order/process', [OrderController::class, 'process'])->name('order.process');
});


Route::fallback(function () {
    abort(404, 'Page not found');
});
