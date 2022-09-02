<?php

namespace App\Http\Controllers\Admin;

use App\Models\Stock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    public function GetCategory(Request $request)
    {

        $supplier_id = $request->supplier_id;
        // dd($supplier_id);
        $allCategory = Stock::with(['category'])->select('category_id')->where('supplier_id', $supplier_id)->groupBy('category_id')->get();
        return response()->json($allCategory);
    } // End Mehtod

    public function GetProduct(Request $request)
    {

        $category_id = $request->category_id;
        $allProduct = Stock::where('category_id', $category_id)->get();
        return response()->json($allProduct);
    } // End Mehtod


    public function GetStock(Request $request)
    {
        $product_id = $request->product_id;
        $stock = Stock::where('id', $product_id)->first()->quantity;
        return response()->json($stock);
    } // End M
}
