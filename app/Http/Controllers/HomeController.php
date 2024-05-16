<?php

namespace App\Http\Controllers;

use App\Models\Good;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $goods = Good::paginate(6);
        return view('home', compact('goods'));
    }
}
