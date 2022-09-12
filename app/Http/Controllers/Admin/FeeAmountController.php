<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cohort;
use App\Models\FeeCategory;
use Illuminate\Http\Request;
use App\Models\FeeCategoryAmount;
use App\Http\Controllers\Controller;

class FeeAmountController extends Controller
{
    public function ViewFeeAmount()
    {
        // $data['allData'] = FeeCategoryAmount::all();
        $data['allData'] = FeeCategoryAmount::select('fee_category_id')->groupBy('fee_category_id')->get();
        return view('dashboard.fee.amount.view', $data);
    }

    public function AddFeeAmount()
    {
        $data['fee_categories'] = FeeCategory::all();
        $data['classes'] = Cohort::all();
        return view('dashboard.fee.amount.add', $data);
    }


    public function StoreFeeAmount(Request $request)
    {

        $countClass = count([$request->cohort_id]);
        if ($countClass != NULL) {
            for ($i = 0; $i < $countClass; $i++) {
                $fee_amount = new FeeCategoryAmount();
                $fee_amount->fee_category_id = $request->fee_category_id;
                $fee_amount->cohort_id = $request->cohort_id[$i];
                $fee_amount->amount = $request->amount[$i];
                $fee_amount->save();
            } // End For Loop
        } // End If Condition

        $notification = array(
            'message' => 'Fee Amount Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect('academic/fee/amount/view')->with($notification);
    }  // End Method



    public function EditFeeAmount($fee_category_id)
    {
        $data['editData'] = FeeCategoryAmount::where('fee_category_id', $fee_category_id)->orderBy('cohort_id', 'asc')->get();
        // dd($data['editData']->toArray());
        $data['fee_categories'] = FeeCategory::all();
        $data['classes'] = Cohort::all();
        return view('dashboard.fee.amount.edit', $data);
    }


    public function UpdateFeeAmount(Request $request, $fee_category_id)
    {
        if ($request->cohort_id == NULL) {

            $notification = array(
                'message' => 'Sorry You do not select any class amount',
                'alert-type' => 'error'
            );

            return redirect()->route('fee.amount.edit', $fee_category_id)->with($notification);
        } else {

            $countClass = count($request->cohort_id);
            FeeCategoryAmount::where('fee_category_id', $fee_category_id)->delete();
            for ($i = 0; $i < $countClass; $i++) {
                $fee_amount = new FeeCategoryAmount();
                $fee_amount->fee_category_id = $request->fee_category_id;
                $fee_amount->cohort_id = $request->cohort_id[$i];
                $fee_amount->amount = $request->amount[$i];
                $fee_amount->save();
            } // End For Loop

        } // end Else

        $notification = array(
            'message' => 'Data Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fee.amount.view')->with($notification);
    } // end Method

    public function DetailsFeeAmount($fee_category_id)
    {
        $data['detailsData'] = FeeCategoryAmount::where('fee_category_id', $fee_category_id)->orderBy('cohort_id', 'asc')->get();

        return view('dashboard.fee.amount.details', $data);
    }



}
