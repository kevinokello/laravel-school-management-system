<?php

namespace App\Http\Controllers\Admin;

use App\Models\Academic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\AcademicFormRequest;

class AcademicController extends Controller
{
    public function index()
    {
        $academic = Academic::where('school_id', session('school_id'))->get();
        return view('dashboard.academic.index', compact('academic'));
    }
    public function store(AcademicFormRequest $request)
    {
        $data = $request->validated();
        $academic = new Academic;
        // $session_id = Session::get('session_id');
        // if (!isset($session_id)) {
        //     $session_id = str_random(40);
        //     Session::put('session_id', $session_id);
        // }
        // $academic->session_id = $session_id;
        $academic->school_id = $request->session()->get('school_id');
        $academic->academic_year = $data['academic_year'];
        $academic->created_by = Auth::user()->id;
        $academic->save();
        session()->flash('success', 'academic year added succesfully');
        return redirect()->back();
    }

    public function destroy($academic_id)
    {
        $academic = Academic::find($academic_id);
        if ($academic) {
            $academic->delete();
            session()->flash('success', 'academic year deleted succesfully');
            return redirect()->back();
        } else {
            session()->flash('danger', 'no academiv=c year id found');
            return redirect()->back();
        }
    }
}
