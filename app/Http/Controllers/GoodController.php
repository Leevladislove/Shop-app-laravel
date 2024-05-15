<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Good;
use Illuminate\Http\Request;

class GoodController extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function good(Good $good)
    {
        return view('good', compact('good'));
    }

    public function category(Category $category)
    {   
        $goods = $category->goods()->paginate(6);
        $currentCategory = $category;

        return view('home', compact('goods', 'currentCategory'));
    }
}
