<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    public function Add()
    {
        $category = Category::where('status', 'enabled')->get();
        return view('dashboard.resource.subcategory.add',compact('category'));
    }
    public function Store()
    {

    }
    public function Edit()
    {
        return view('dashboard.resource.subcategory.add');
    }
    public function View()
    {
        return view('dashboard.resource.subcategory.all');
    }
    public function Update()
    {
        return view('dashboard.resource.subcategory.add');
    }
    public function Destroy()
    {
        return view('dashboard.resource.subcategory.add');
    }
}
