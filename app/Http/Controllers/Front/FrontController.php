<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function welcome()
    {
        $category = Category::all();
        $resource = Resource::where('status', '1')->orderBy('created_at', 'DESC')->get();
        return view('welcome', compact(['category','resource']));
    }
    
    public function category(string $category_slug)
    {     
        $category = Category::where('slug', $category_slug)->where('status', '0')->first();
        if ($category) {
            // $article = Article::where('category_id', $category->id)->where('status', '0')->get();
            $article = Article::where('category_id', $category->id)->where('status', '0')->paginate(2);
            return view('frontend.articles.index', compact('article', 'category'));
        } else {
            return redirect('/');
        }
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
    public function single()
    {
        return view('single');
    }
}
