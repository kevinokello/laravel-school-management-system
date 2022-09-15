<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\CateFormRequest;

class CategoryController extends Controller
{
    public function Add()
    {
        return view('dashboard.resource.category.add');
    }
    public function Store(CateFormRequest $request)
    {
        $data = $request->validated();
        $category = new Category;
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/categories/', $filename);
            $category->image = $filename;
        }
        $category->save();
        session()->flash('success', 'Category created succesfully');
        return redirect('resource/categories');
    }
    public function Edit($category_id)
    {
        $category = Category::find($category_id);
        return view('dashboard.resource.category.edit', compact('category'));
    }
    public function View()
    {
        $categories = Category::all();
        return view('dashboard.resource.category.all', compact('categories'));
    }
    public function Update(CateFormRequest $request, $category_id)
    {
        $data = $request->validated();
        $category = new Category;
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        if ($request->hasfile('image')) {
            $destination = 'uploads/categories' . $category->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/categories/', $filename);
            $category->image = $filename;
        }
        $category->update();
        session()->flash('success', 'Category updates succesfully');
        return redirect('resource/categories');
    }
    public function Delete($category_id)
    {
        $categories = Category::find($category_id);
        if ($categories) {
            $categories->delete();
            session()->flash('success', 'category deleted succesfully');
            return redirect()->back();
        } else {
            session()->flash('danger', 'no category id found');
            return redirect()->back();
        }
    }
}
