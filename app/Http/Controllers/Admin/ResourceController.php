<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Resource;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\ResourceFormRequest;

class ResourceController extends Controller
{
    public function View()
    {
        $resources = Resource::all();
        return view('dashboard.resource.all', compact('resources'));
    }
    public function Create()
    {
        $category = Category::where('status', 'enabled')->get();
        $subcategory = SubCategory::where('status', 'enabled')->get();
        return view('dashboard.resource.add', compact(['category','subcategory']));
    }
    public function Store(ResourceFormRequest $request)
    {
        $data = $request->validated();
        $resource = new Resource;
        $resource->category_id = $data['category_id'];
        $resource->sub_category_id = $data['sub_category_id'];

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/categories/', $filename);
            $resource->image = $filename;
        }
        $resource->name = $data['name'];
        $resource->price = $data['price'];
        $resource->slug = $data['slug'];
        $resource->status = $request->status == true ? '1' : '0';
        $resource->featured = $request->featured == true ? '1' : '0';
        $resource->recommended = $request->recommended == true ? '1' : '0';
        $resource->description = $data['description'];
        $resource->body = $data['body'];
        $resource->attatchment = $request->attatchment;
        $resource->yt_iframe = $data['yt_iframe'];
        $resource->save();
        session()->flash('success', 'resource added succesfully');
        return redirect('resource/all');
    }
    public function Edit($resource_id)
    {
        $category = Category::where('status', 'enabled')->get();
        $subcategory = SubCategory::where('status', 'enabled')->get();
        $resource = Resource::find($resource_id);
        return view('dashboard.resource.edit', compact(['category', 'subcategory','resource']));
    }
    public function Update(ResourceFormRequest $request, $resource_id)
    {
        $data = $request->validated();
        $resource = Resource::find($resource_id);
        $resource->category_id = $data['category_id'];
        $resource->sub_category_id = $data['sub_category_id'];
        if ($request->hasfile('image')) {
            $destination = 'uploads/resources' . $resource->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/resources/', $filename);
            $resource->image = $filename;
        }
        $resource->name = $data['name'];
        $resource->price = $data['price'];
        $resource->slug = $data['slug'];
        $resource->status = $data['status'] == true ? '1' : '0';
        $resource->featured = $data['featured'] == true ? '1' : '0';
        $resource->recommended = $data['recommended'] == true ? '1' : '0';
        $resource->description = $data['description'];
        $resource->body = $data['body'];
        $resource->attatchment = $data['attatchment'];
        $resource->yt_iframe = $data['yt_iframe'];
        $resource->update();
        session()->flash('success', 'resource updated succesfully');
        return redirect('resource/all');
    }
    public function Destroy($resource_id)
    {
        $resource = Resource::find($resource_id);
        if ($resource) {
            $resource->delete();
            session()->flash('success', 'resource deleted succesfully');
            return redirect()->back();
        } else {
            session()->flash('danger', 'no resource id found');
            return redirect()->back();
        }
    }

    public function getSubCategory(Request $request)
    {
        $subcategories = SubCategory::where('category_id', $request->category_id)
            ->get();
        if (count($subcategories) > 0) {
            return response()->json($subcategories);
        }
    }

}
