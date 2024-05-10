<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['goods' => \App\Models\Good::all()]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/good/{id}', [App\Http\Controllers\GoodController::class, 'good'])->name('good');
