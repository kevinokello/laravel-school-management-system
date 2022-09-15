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
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StudentFeeFormRequest;

class StudentFeeController extends Controller
{
    public function StudentFeeView()
    {
        $data['allData'] = StudentFee::all();
        return view('dashboard.account.student.fee.view', $data);
    }
    public function StudentFeeAdd()
    {
        $years = Academic::all();
        $classes = Cohort::all();
        $students = Student::all();
        $fee_categories = FeeCategory::all();
        return view('dashboard.account.student.fee.add', compact(['years', 'classes', 'students', 'fee_categories']));
    }
    public function StudentFeeKeyin()
    {
        $years = Academic::all();
        $classes = Cohort::all();
        $students = Student::all();
        $fee_categories = FeeCategory::all();
        return view('dashboard.account.student.fee.keyin', compact(['years', 'classes', 'students', 'fee_categories']));
    }

    public function StudentFeeEdit($student_id)
    {
        $student = Student::find($student_id);
        $session = Session::where('status', '0')->get();
        $academic = Academic::where('status', '0')->get();
        $cohort = Cohort::where('status', '0')->get();
        return view('dashboard.account.student.fee.edit', compact(['student', 'session', 'academic', 'cohort']));
    }
    public function StudentFeeUpdate(StudentFeeFormRequest $request, $student_id)
    {
        $data = $request->validated();
        $student = Student::find($student_id);
        $student->fee_balance = $data['fee_balance'];
        $student->update();
        session()->flash('success', 'student accounts updated succesfully');
        return redirect('accounts/student/fee/add');
    }
    public function StudentFeeStore(Request $request)
    {
        $data = new StudentFee();
        $date = date('Y-m-d H:i:s');
        $data->academic_id = $request->academic_id;
        $data->cohort_id = $request->cohort_id;
        $data->date = $date;
        $data->fee_category_id = $request->fee_category_id;
        $data->amount = $request->amount;
        $data->save();
        session()->flash('success', 'student fee added succesfully');
        return redirect('accounts/student/fee/view');
    } // end method

}
