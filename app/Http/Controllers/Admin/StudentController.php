<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cohort;
use App\Models\Session;
use App\Models\Student;
use App\Models\Academic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\StudentFormRequest;

class StudentController extends Controller
{
    public function create()
    {
        $session = Session::where('status', '0')->get();
        $academic = Academic::where('status', '0')->get();
        $cohort = Cohort::where('status', '0')->get();

        return view('dashboard.student.add_student', compact(['academic', 'cohort', 'session']));
    }
    public function view()
    {
        $students = Student::all();
        return view('dashboard.student.view_students',compact('students'));
    }

    public function store(StudentFormRequest $request)
    {
        $data = $request->validated();
        $student = new Student;
        $student->academic_id = $data['academic_id'];
        // $student->cohort_id = $data['cohort_id'];
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
        // $student->parent_info1 = $data['parent_info1'];
        $student->admission_no = $data['admission_no'];
        $student->previous_school_details = $data['previous_school_details'];
        $student->aditional_notes = $data['aditional_notes'];
        $student->medical_condition = $data['medical_condition'];
        // $student->status = $request->status == true ? '1' : '0';
        // $student->created_by = Auth::user()->id;
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
        // Pictorials::create([
        //     'headline' => $request->headline,
        //     'images' => $images_arr,
        //     'caption' => implode(',', $captions),
        //     'credits' => $request->credits,
        //     'paragraph' => $request->paragraph
        // ]);
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

}
