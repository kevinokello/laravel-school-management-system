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

        $suppliers = Supplier::latest()->get();
        return view('dashboard.inventory.supplier.all', compact('suppliers'));
    }

    public function SupplierAdd()
    {
        $stockcategory = StockCategory::where('status', '1')->get();
        return view('dashboard.inventory.supplier.add', compact('stockcategory'));
    } // End Method

    public function SupplierStore(SupplierFormRequest $request)
    {
        Supplier::insert([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'unit_id' => $request->unit_id,
            'address' => $request->address,
            'created_by' => Auth::user()->id,
        ]);
        session()->flash('success', 'supplier added succesfully');
        return redirect('inventory/supplier/all');
    } // End Method

    public function SupplierEdit($id)
    {
        $stockcategory = StockCategory::where('status', '1')->get();
        $supplier = Supplier::findOrFail($id);
        return view('dashboard.inventory.supplier.edit', compact(['supplier', 'stockcategory']));
    } // End Method
    public function SupplierUpdate(Request $request)
    {

        $sullier_id = $request->id;
        Supplier::findOrFail($sullier_id)->update([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'unit_id' => $request->unit_id,
            'updated_by' => Auth::user()->id,
        ]);

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
