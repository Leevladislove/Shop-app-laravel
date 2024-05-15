<?php

use App\Models\Good;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    $goods = Good::paginate(6);
    return view('home', compact('goods'));
});

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('goods/{good}', [GoodController::class, 'good'])->name('good');
Route::get('categories/{category}', [GoodController::class, 'category'])->name('category');
Route::get('orders/buy/{id}', [OrderController::class, 'buy'])->name('buy');
Route::get('orders/current', [OrderController::class, 'current'])->name('orders.current');
Route::get('orders/process', [OrderController::class, 'process'])->name('orders.process');
