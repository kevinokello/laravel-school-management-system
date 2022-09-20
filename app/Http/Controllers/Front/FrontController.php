<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function welcome()
    {
        $category = Category::all();
        return view('welcome', compact('category'));
    }
    public function browse()
    {
        return view('browse');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
}
