<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cohort;
use App\Models\Section;
use App\Models\Academic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\SessionFormRequest;

class SectionController extends Controller
{
    public function index()
    {
        $academic = Academic::where('status', '0')->get();
        $cohort = Cohort::where('status', '0')->get();
        $session = Section::where('status', '0')->get();
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
        $session = new Section;
        $session->session_name = $data['session_name'];
        $session->cohort_id = $data['cohort_id'];
        $session->academic_id = $data['academic_id'];
        $session->created_by = Auth::user()->id;
        $session->save();
        session()->flash('success', 'Academic session created succesfully');
        return redirect()->back();
    }
    public function destroy($session_id)
    {
        $session = Section::find($session_id);
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
