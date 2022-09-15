<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubCategoryFormRequest;

class SubCategoryController extends Controller
{
    public function Add()
    {
        $category = Category::where('status', 'enabled')->get();
        return view('dashboard.resource.subcategory.add',compact('category'));
    }
    public function Store(SubCategoryFormRequest $request)
    {
        $data = $request->validated();
        $subcategory = new SubCategory;
        $subcategory->name = $data['name'];
        $subcategory->slug = $data['slug'];
        $subcategory->description = $data['description'];
        $subcategory->category_id = $data['category_id'];
        $subcategory->save();
        session()->flash('success', 'Subcategory created succesfully');
        return redirect('resource/subcategories');
    }
    public function Edit($subcategory_id)
    {
        $category = Category::where('status', 'enabled')->get();
        $subcategory = SubCategory::find($subcategory_id);
        return view('dashboard.resource.subcategory.edit', compact(['category','subcategory']));
    }
    public function View()
    {
        $subcategories = SubCategory::all();

        return view('dashboard.resource.subcategory.all', compact('subcategories'));
    }
    public function Update(SubCategoryFormRequest $request, $subcategory_id)
    {
        $data = $request->validated();
        $subcategory = new SubCategory;
        $subcategory->name = $data['name'];
        $subcategory->slug = $data['slug'];
        $subcategory->description = $data['description'];
        $subcategory->category_id = $data['category_id'];
        $subcategory->update();
        session()->flash('success', 'Subcategory updated succesfully');
        return redirect('resource/subcategories');
    }
    public function Delete($subcategory_id)
    {
        $subcategories = Category::find($subcategory_id);
        if ($subcategories) {
            $subcategories->delete();
            session()->flash('success', 'subcategory deleted succesfully');
            return redirect()->back();
        } else {
            session()->flash('danger', 'no subcategory id found');
            return redirect()->back();
        }
    }
}
