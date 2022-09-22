<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Models\StockCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\SupplierFormRequest;

class SupplierController extends Controller
{
    public function SupplierAll()
    {
        $suppliers = Supplier::where('school_id', session('email'))->latest()->get();
        return view('dashboard.inventory.supplier.all', compact('suppliers'));
    }
    public function SupplierAdd()
    {
        $stockcategory = StockCategory::where('school_id', session('email'))->get();
        return view('dashboard.inventory.supplier.add', compact('stockcategory'));
    } // End Method

    public function SupplierStore(SupplierFormRequest $request)
    {
        $data = $request->validated();
        $supplier = new Supplier;
        $supplier->name = $data['name'];
        $supplier->mobile_no = $data['mobile_no'];
        $supplier->email = $data['email'];
        $supplier->unit_id = $data['unit_id'];
        $supplier->created_by = Auth::user()->id;
        $supplier->school_id = $request->session()->get('email');
        $supplier->save();
        session()->flash('success', 'supplier added succesfully');
        return redirect('inventory/supplier/all');
    } // End Method

    public function SupplierEdit($id)
    {
        $stockcategory = StockCategory::where('school_id', session('email'))->get();
        $supplier = Supplier::findOrFail($id);
        return view('dashboard.inventory.supplier.edit', compact(['supplier', 'stockcategory']));
    } // End Method
    public function SupplierUpdate(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->name = $request['name'];
        $supplier->mobile_no = $request['mobile_no'];
        $supplier->email = $request['email'];
        $supplier->unit_id = $request['unit_id'];
        $supplier->updated_by = Auth::user()->id;
        $supplier->update();
        session()->flash('success', 'supplier updated succesfully');
        return redirect('inventory/supplier/all');
    } // End Method

    public function SupplierDelete($id)
    {

        Supplier::findOrFail($id)->delete();
        session()->flash('success', 'supplier updated succesfully');
        return redirect()->back();
    } // End Method

}
