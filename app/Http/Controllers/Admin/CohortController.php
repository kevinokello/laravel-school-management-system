<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cohort;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CohortFormRequest;

class CohortController extends Controller
{
    public function index()
    {
        $cohort = Cohort::all();
        return view('dashboard.cohort.index', compact('cohort'));
    }
    public function store(CohortFormRequest $request)
    {
        $data = $request->validated();
        $cohort = new Cohort;
        $cohort->cohort_name = $data['cohort_name'];
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
