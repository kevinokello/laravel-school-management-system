<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Add()
    {
        return view('dashboard.resource.category.add');
    }
    public function Store()
    {
        
    }
    public function Edit()
    {
        return view('dashboard.resource.category.add');
    }
    public function View()
    {
        return view('dashboard.resource.category.all');
    }
    public function Update()
    {
        return view('dashboard.resource.category.add');
    }
    public function Destroy()
    {
        return view('dashboard.resource.category.add');
    }
}
