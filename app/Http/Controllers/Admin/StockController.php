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
        $stock = Stock::where('school_id', session('email'))->get();
        return view('dashboard.inventory.stock.all', compact('stock'));
    }
    public function Add()
    {
        $supplier = Supplier::where('school_id', session('email'))->get();
        $category = StockCategory::where('school_id', session('email'))->get();
        $unit = Unit::where('school_id', session('email'))->get();
        return view('dashboard.inventory.stock.add', compact('supplier', 'category', 'unit'));
    }
    public function Store(Request $request)
    {
        $stock = new Stock;
        $stock->name = $request->name;
        $stock->supplier_id = $request->supplier_id;
        $stock->unit_id = $request->unit_id;
        $stock->category_id = $request->category_id;
        $stock->quantity = '0';
        $stock->created_by = Auth::user()->id;
        $stock->school_id = $request->session()->get('email');
        $stock->save();
        session()->flash('success', 'stock added succesfully');
        return redirect('inventory/stock/all');
    } // End Method

    public function Edit($id)
    {
        $supplier = Supplier::where('school_id', session('email'))->get();
        $category = StockCategory::where('school_id', session('email'))->get();
        $unit = Unit::where('school_id', session('email'))->get();
        $stock = Stock::findOrFail($id);
        return view('dashboard.inventory.stock.edit', compact('stock', 'supplier', 'category', 'unit'));
    } // End Method

    public function Update(Request $request, $id)
    {
        $stock = Stock::find($id);
        $data = $request->validated();
        $stock->name = $request->name;
        $stock->supplier_id = $request->supplier_id;
        $stock->unit_id = $request->unit_id;
        $stock->category_id = $request->category_id;
        $stock->quantity = '0';
        $stock->updated_by = Auth::user()->id;
        $stock->update();
        session()->flash('success', 'stock updated succesfully');
        return redirect('inventory/stock/all');
    } // End Method

    public function Delete($id)
    {
        Stock::findOrFail($id)->delete();
        session()->flash('success', 'stock deleted succesfully');
        return redirect()->back();
    } // End Method
}
