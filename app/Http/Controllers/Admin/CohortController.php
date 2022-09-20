<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cohort;
use App\Models\Academic;
use App\Models\StudentFee;
use Illuminate\Http\Request;
use App\Models\FeeCategoryAmount;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CohortFormRequest;

class CohortController extends Controller
{
    public function index()
    {
        $academic = Academic::where('status', '0')->get();
        $cohort = Cohort::all();
        $feecategory = StudentFee::all();
        return view('dashboard.cohort.index', compact(['academic', 'cohort','feecategory']));
    }
    public function store(CohortFormRequest $request)
    {
        $data = $request->validated();
        $cohort = new Cohort;
        $cohort->cohort_name = $data['cohort_name'];
        $cohort->academic_id = $data['academic_id'];
        // $cohort->fee_id = $data['fee_id'];
        $cohort->created_by = Auth::user()->id;
        $cohort->save();
        session()->flash('success', 'Academic class created succesfully');
        return redirect()->back();
    }

    public function destroy($cohort_id)
    {
        $cohort = Cohort::find($cohort_id);
        if ($cohort) {
            $cohort->delete();
            session()->flash('success', 'academic class deleted succesfully');
            return redirect()->back();
        } else {
            session()->flash('danger', 'no class id found');
            return redirect()->back();
        }
    }
}
