<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function Add()
    {
        return view('dashboard.resource.subcategory.add');
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
