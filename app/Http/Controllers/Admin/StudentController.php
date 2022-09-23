<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cohort;
use App\Models\Session;
use App\Models\Student;
use App\Models\Academic;
use App\Models\StudentFee;
use App\Models\FeeCategory;
use Illuminate\Http\Request;
use App\Models\FeeCategoryAmount;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\StudentFormRequest;

class StudentController extends Controller
{
    public function create()
    {
        $session = Session::where('school_id', session('school_id'))->get();
        $academic = Academic::where('school_id', session('school_id'))->get();
        $cohort = Cohort::where('school_id', session('school_id'))->get();
        return view('dashboard.student.add_student', compact(['academic', 'cohort', 'session']));
    }
    public function view()
    {
        $students = Student::where('school_id', session('school_id'))->get();
        return view('dashboard.student.view_students', compact('students'));
    }

    public function store(StudentFormRequest $request)
    {
        $data = $request->validated();
        $student = new Student;
        $student->academic_id = $data['academic_id'];
        $student->cohort_id = $data['cohort_id'];
        $student->session_id = $data['session_id'];
        $student->first_name = $data['first_name'];
        $student->middle_name = $data['middle_name'];
        $student->last_name = $data['last_name'];
        $student->religion_id = $data['religion_id'];
        $student->gender_id = $data['gender_id'];
        $student->location_id = $data['location_id'];
        $student->email = $data['email'];
        $student->date_of_birth = $data['date_of_birth'];
        $student->mobile = $data['mobile'];
        $student->admission_date = $data['admission_date'];
        if ($request->hasfile('student_photo')) {

            $file = $request->file('student_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/students/', $filename);
            $student->student_photo = $filename;
        }
        $student->admission_no = $data['admission_no'];
        $student->previous_school_details = $data['previous_school_details'];
        $student->aditional_notes = $data['aditional_notes'];
        $student->medical_condition = $data['medical_condition'];
        $studentfee = StudentFee::where('cohort_id', $data['cohort_id'])->first();
        $student->fee_id = $studentfee;
        $student->school_id = $request->session()->get('school_id');
        $student->save();
        session()->flash('success', 'student added succesfully');
        return redirect('student/view-students');
    }

    public function edit($student_id)
    {

        $student = Student::find($student_id);
        $session = Session::where('status', '0')->get();
        $academic = Academic::where('status', '0')->get();
        $cohort = Cohort::where('status', '0')->get();
        return view('dashboard.student.edit_student', compact(['session', 'academic', 'cohort', 'student']));
    }
    public function update(StudentFormRequest $request, $student_id)
    {
        $data = $request->validated();
        $student = Student::find($student_id);
        $student->academic_id = $data['academic_id'];
        $student->cohort_id = $data['cohort_id'];
        $student->session_id = $data['session_id'];
        $student->first_name = $data['first_name'];
        $student->middle_name = $data['middle_name'];
        $student->last_name = $data['last_name'];
        $student->religion_id = $data['religion_id'];
        $student->gender_id = $data['gender_id'];
        $student->location_id = $data['location_id'];
        $student->email = $data['email'];
        $student->date_of_birth = $data['date_of_birth'];
        $student->mobile = $data['mobile'];
        $student->admission_date = $data['admission_date'];
        if ($request->hasfile('student_photo')) {
            $destination = 'uploads/students' . $student->student_photo;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('student_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/students/', $filename);
            $student->student_photo = $filename;
        }
        $student->admission_no = $data['admission_no'];
        $student->previous_school_details = $data['previous_school_details'];
        $student->aditional_notes = $data['aditional_notes'];
        $student->medical_condition = $data['medical_condition'];
        $student->update();
        session()->flash('success', 'student details updated succesfully');
        return redirect('student/view-students');
    }
    public function destroy($student_id)
    {
        $students = Student::find($student_id);
        if ($students) {
            $students->delete();
            session()->flash('success', 'student deleted succesfully');
            return redirect()->back();
        } else {
            session()->flash('danger', 'no student id found');
            return redirect()->back();
        }
    }
    public function getCohorts(Request $request)
    {
        $cohorts = Cohort::where('academic_id', $request->academic_id)
            ->get();
        if (count($cohorts) > 0) {
            return response()->json($cohorts);
        }
    }

    public function getSessions(Request $request)
    {
        $sessions = Session::where('cohort_id', $request->cohort_id)
            ->get();
        if (count($sessions) > 0) {
            return response()->json($sessions);
        }
    }
}
