<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use App\Models\Stock;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Models\StockCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class StockController extends Controller
{
    public function All()
    {
        $stock = Stock::latest()->get();
        return view('dashboard.inventory.stock.all', compact('stock'));
    }
    public function Add()
    {
        $supplier = Supplier::all();
        $category = StockCategory::all();
        $unit = Unit::all();
        return view('dashboard.inventory.stock.add', compact('supplier', 'category', 'unit'));
    }
    public function Store(Request $request)
    {
        Stock::insert([
            'name' => $request->name,
            'supplier_id' => $request->supplier_id,
            'unit_id' => $request->unit_id,
            'category_id' => $request->category_id,
            'quantity' => '0',
            'created_by' => Auth::user()->id,
            // 'created_at' => Carbon::now(),
        ]);

        // $notification = array(
        //     'message' => 'Product Inserted Successfully',
        //     'alert-type' => 'success'
        // );
        session()->flash('success', 'stock added succesfully');
        return redirect('inventory/stock/all');
        // return redirect()->route('inventory/stock/all')->with($notification);
    } // End Method

    public function Edit($id)
    {

        $supplier = Supplier::all();
        $category = StockCategory::all();
        $unit = Unit::all();
        $stock = Stock::findOrFail($id);
        return view('dashboard.inventory.stock.edit', compact('stock', 'supplier', 'category', 'unit'));
    } // End Method



    public function Update(Request $request)
    {
        $stock_id = $request->id;
        Stock::findOrFail($stock_id)->update([

            'name' => $request->name,
            'supplier_id' => $request->supplier_id,
            'unit_id' => $request->unit_id,
            'category_id' => $request->category_id,
            'updated_by' => Auth::user()->id,
            // 'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Product Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('product.all')->with($notification);
    } // End Method


    public function Delete($id)
    {

        Stock::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method
}
