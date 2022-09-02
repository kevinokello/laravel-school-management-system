<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use App\Models\Purchase;
use App\Models\Stock;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Models\StockCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function PurchaseAll()
    {
        $allData = Purchase::orderBy('date', 'desc')->orderBy('id', 'desc')->get();
        return view('dashboard.inventory.purchase.all', compact('allData'));
    } // End Method


    public function PurchaseAdd()
    {

        $supplier = Supplier::all();
        $unit = Unit::all();
        $category = StockCategory::all();
        return view('dashboard.inventory.purchase.add', compact('supplier', 'unit', 'category'));
    } // End Method


    public function PurchaseStore(Request $request)
    {

        if ($request->category_id == null) {

            $notification = array(
                'message' => 'Sorry you do not select any item',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        } else {

            $count_category = count($request->category_id);
            for ($i = 0; $i < $count_category; $i++) {
                $purchase = new Purchase();
                $purchase->date = date('Y-m-d', strtotime($request->date[$i]));
                $purchase->purchase_no = $request->purchase_no[$i];
                $purchase->supplier_id = $request->supplier_id[$i];
                $purchase->category_id = $request->category_id[$i];

                $purchase->product_id = $request->product_id[$i];
                $purchase->buying_qty = $request->buying_qty[$i];
                $purchase->unit_price = $request->unit_price[$i];
                $purchase->buying_price = $request->buying_price[$i];
                $purchase->description = $request->description[$i];

                $purchase->created_by = Auth::user()->id;
                $purchase->status = '0';
                $purchase->save();
            } // end foreach
        } // end else

        $notification = array(
            'message' => 'Data Save Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('inventory/purchase/all')->with($notification);
    } // End Method


    public function PurchaseDelete($id)
    {

        Purchase::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Purchase Iteam Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // End Method


    public function PurchasePending()
    {

        $allData = Purchase::orderBy('date', 'desc')->orderBy('id', 'desc')->where('status', '0')->get();
        return view('dashboard.inventory.purchase.pending', compact('allData'));
    } // End Method


    public function PurchaseApprove($id)
    {

        $purchase = Purchase::findOrFail($id);
        $stock = Stock::where('id', $purchase->product_id)->first();
        $purchase_qty = ((float)($purchase->buying_qty)) + ((float)($stock->quantity));
        $stock->quantity = $purchase_qty;

        if ($stock->save()) {

            Purchase::findOrFail($id)->update([
                'status' => '1',
            ]);

            $notification = array(
                'message' => 'Status Approved Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('purchase.all')->with($notification);
        }
    } // End Method


    public function DailyPurchaseReport()
    {
        return view('dashboard.inventory.purchase.daily_purchase_report');
    } // End Method


    public function DailyPurchasePdf(Request $request)
    {

        $sdate = date('Y-m-d', strtotime($request->start_date));
        $edate = date('Y-m-d', strtotime($request->end_date));
        $allData = Purchase::whereBetween('date', [$sdate, $edate])->where('status', '1')->get();


        $start_date = date('Y-m-d', strtotime($request->start_date));
        $end_date = date('Y-m-d', strtotime($request->end_date));
        // return view('backend.pdf.daily_purchase_report_pdf', compact('allData', 'start_date', 'end_date'));
    }// End Method



}
