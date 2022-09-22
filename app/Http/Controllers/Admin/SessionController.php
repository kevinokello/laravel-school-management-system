<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\Cohort;
use App\Models\Session;
use App\Models\Academic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\SessionFormRequest;

class SessionController extends Controller
{
    public function index()
    {
        $academic =Academic::where('school_id', session('email'))->get();
        $cohort = Cohort::where('school_id', session('email'))->get();
        $session =Session::where('school_id', session('email'))->get();
        return view('dashboard.session.index', compact(['academic', 'cohort', 'session']));
    }
    public function getCohort(Request $request)
    {
        $cohorts = Cohort::where('academic_id', $request->academic_id)
            ->get();
        if (count($cohorts) > 0) {
            return response()->json($cohorts);
        }
    }
    /**
     * return cities list
     *
     * @return json
     */
    public function store(SessionFormRequest $request)
    {
        $data = $request->validated();
        $session = new Session;
        $session->session_name = $data['session_name'];
        $session->cohort_id = $data['cohort_id'];
        $session->academic_id = $data['academic_id'];
        $session->created_by = Auth::user()->id;
        $session->school_id = $request->session()->get('email');
        $session->save();
        session()->flash('success', 'Academic session created succesfully');
        return redirect()->back();
    }

    public function destroy($session_id)
    {
        $session = Session::find($session_id);
        if ($session) {
            $session->delete();
            session()->flash('success', 'academic session deleted succesfully');
            return redirect()->back();
        } else {
            session()->flash('danger', 'no session id found');
            return redirect()->back();
        }
    }
}
