<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cohort;
use App\Models\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\SessionFormRequest;

class SessionController extends Controller
{
    public function index()
    {
        $cohort = Cohort::where('status', '0')->get();
        $session = Session::all();
        return view('dashboard.session.index', compact(['session','cohort']));
    }
    public function store(SessionFormRequest $request)
    {
        $data = $request->validated();
        $session = new Session;
        $session->session_name = $data['session_name'];
        // $session->cohort_id = $data['cohort_id'];
        $session->created_by = Auth::user()->id;
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
