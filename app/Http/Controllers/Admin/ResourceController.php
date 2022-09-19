<?php

namespace App\Http\Controllers\Admin;

use App\Models\Resource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    public function View()
    {
        return view('dashboard.resource.all');
    }
    public function Create()
    {
        return view('dashboard.resource.add');
    }
    public function Store()
    {

    }
    public function Edit()
    {

    }
    public function Update()
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
