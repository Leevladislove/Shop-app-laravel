<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Good;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function good(Good $good)
    {
        return view('good', compact('good'));
    }

    public function category(Category $category)
    {   
        $goods = $category->goods;
        $currentCategory = $category;
    
        return view('home', compact('goods', 'currentCategory'));
    }
}
