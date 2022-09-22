<?php

namespace App\Http\Controllers\Admin;

use App\Models\FeeCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeeCategoryController extends Controller
{
    public function ViewFeeCat()
    {
        $data['allData'] = FeeCategory::where('school_id', session('email'))->get();
        return view('dashboard.fee.category.view', $data);
    }

    public function FeeCatAdd()
    {
        return view('dashboard.fee.category.add');
    }

    public function FeeCatStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        $data = new FeeCategory();
        $data->name = $request->name;
        $data->school_id = $request->session()->get('email');
        $data->save();
        session()->flash('success', 'fee category added succesfully');
        return redirect('academic/fee/category/view');
    }



    public function FeeCatEdit($id)
    {
        $editData = FeeCategory::find($id);
        return view('dashboard.fee.category.edit', compact('editData'));
    }



    public function FeeCategoryUpdate(Request $request, $id)
    {
        $data = FeeCategory::find($id);
        $data->name = $request->name;
        $data->save();
        session()->flash('success', 'fee category updated succesfully');
        return redirect('academic/fee/category/view');
    }

    public function FeeCategoryDelete($id)
    {
        $user = FeeCategory::find($id);
        $user->delete();
        session()->flash('success', 'fee category deleted succesfully');
        return redirect('academic/fee/category/view');
    }

}
