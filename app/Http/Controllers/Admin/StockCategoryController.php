<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CategoryFormRequest;
use App\Http\Controllers\Controller;
use App\Models\StockCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockCategoryController extends Controller
{
    public function index()
    {
        $category = StockCategory::all();
        return view('dashboard.inventory.category.index', compact('category'));
    }
    public function store(CategoryFormRequest $request)
    {
        $data = $request->validated();
        $category = new StockCategory;
        $category->name = $data['name'];
        $category->created_by = Auth::user()->id;
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
