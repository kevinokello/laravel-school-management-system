<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\StockCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CategoryFormRequest;

class StockCategoryController extends Controller
{
    public function index()
    {
        $category = StockCategory::where('school_id', session('school_id'))->get();
        $department = Unit::where('school_id', session('school_id'))->get();
        return view('dashboard.inventory.category.index', compact(['category', 'department']));
    }
    public function store(CategoryFormRequest $request)
    {
        $data = $request->validated();
        $category = new StockCategory;
        $category->name = $data['name'];
        $category->unit_id = $data['unit_id'];
        $category->created_by = Auth::user()->id;
        $category->school_id = $request->session()->get('school_id');
        $category->save();
        session()->flash('success', 'Category created succesfully');
        return redirect()->back();
    }
    public function destroy($category_id)
    {
        $category = StockCategory::find($category_id);
        if ($category) {
            $category->delete();
            session()->flash('success', 'category deleted succesfully');
            return redirect()->back();
        } else {
            session()->flash('danger', 'no category id found');
            return redirect()->back();
        }
    }
}
