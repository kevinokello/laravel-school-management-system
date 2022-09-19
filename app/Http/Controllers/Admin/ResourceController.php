<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Resource;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        return view('dashboard.resource.add');
    }
    public function Store(ResourceFormRequest $request)
    {
        $data = $request->validated();
        $resource = new Resource;
        $resource->created_by = Auth::user()->id;
        $resource->save();
    }
    public function Edit($resource_id)
    {
        $resource = Resource::find($resource_id);
    }
    public function Update(ResourceFormRequest $resource, $resource_id)
    {
        
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
}
