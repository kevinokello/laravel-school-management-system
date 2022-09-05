<?php

namespace App\Http\Controllers\Admin;

use App\Models\FeeCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeeCategoryController extends Controller
{
    public function ViewFeeCat()
    {
        $data['allData'] = FeeCategory::all();
        return view('dashboard.fee.category.view', $data);
    }

    public function FeeCatAdd()
    {
        return view('dashboard.fee.category.add');
    }

    public function FeeCatStore(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|unique:fee_categories,name',
        ]);

        $data = new FeeCategory();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Fee Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect('academic/fee/category/view')->with($notification);
    }



    public function FeeCatEdit($id)
    {
        $editData = FeeCategory::find($id);
        return view('dashboard.fee.category.edit', compact('editData'));
    }



    public function FeeCategoryUpdate(Request $request, $id)
    {

        $data = FeeCategory::find($id);

        $validatedData = $request->validate([
            'name' => 'required|unique:fee_categories,name,' . $data->id

        ]);


        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Fee Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect('academic/fee/category/view')->with($notification);
    }


    public function FeeCategoryDelete($id)
    {
        $user = FeeCategory::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Fee Category Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect('dashboard/fee/category/view')->with($notification);
    }

}
