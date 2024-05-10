<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('home', ['goods' => \App\Models\Good::all()]);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/goods/{good}', [GoodController::class, 'good'])->name('good');
Route::get('/categories/{category}', [GoodController::class, 'category'])->name('category');
