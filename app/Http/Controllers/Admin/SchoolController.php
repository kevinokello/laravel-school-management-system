<?php

namespace App\Http\Controllers\Admin;

use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SchoolFormRequest;
use App\Http\Requests\Admin\StudentFormRequest;

class SchoolController extends Controller
{
    public function create()
    {
        return view('dashboard.school.add');
    }
    public function store(SchoolFormRequest $request)
    {
        $data = $request->validated();
        $school = new School;
        $school->name = $request['name'];
        $school->location = $request['location'];
        $school->email = $request['email'];
        $school->contact = $request['contact'];
        $school->status = $request->status == true ? '1' : '0';
        $school->save();
        session()->flash('success', 'school added succesfully');
        return redirect('school/all');
    }
    public function edit($school_id)
    {
        $school = School::find($school_id);
        return view('dashboard.school.edit', compact('school'));
    }
    public function view()
    {
        $schools = School::all();
        return view('dashboard.school.all', compact('schools'));
    }
    public function update(SchoolFormRequest $request, $school_id)
    {
        $data = $request->validated();
        $school = School::find($school_id);
        $school->name = $request['name'];
        $school->location = $request['location'];
        $school->email = $request['email'];
        $school->contact = $request['contact'];
        $school->status = $request->status == true ? '1' : '0';
        $school->update();
        session()->flash('success', 'school updated succesfully');
        return redirect('school/all');
    }
    public function destroy($school_id)
    {
        $school = School::find($school_id);
        if ($school) {
            $school->delete();
            session()->flash('success', 'school deleted succesfully');
            return redirect()->back();
        } else {
            session()->flash('danger', 'no school id found');
            return redirect()->back();
        }
    }
}
