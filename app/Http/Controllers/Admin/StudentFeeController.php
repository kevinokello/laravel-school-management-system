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
    // public function StudentFeeGetStudent(Request $request)
    // {

    //     $year_id = $request->year_id;
    //     $class_id = $request->class_id;
    //     $fee_category_id = $request->fee_category_id;
    //     $date = date('Y-m', strtotime($request->date));
    //     $data = AssignStudent::where('year_id', $year_id)->where('class_id', $class_id)->get();
    //     $html['thsource']  = '<th>ID No</th>';
    //     $html['thsource'] .= '<th>Student Name</th>';
    //     $html['thsource'] .= '<th>Father Name</th>';
    //     $html['thsource'] .= '<th>Original Fee </th>';
    //     $html['thsource'] .= '<th>Discount Amount</th>';
    //     $html['thsource'] .= '<th>Fee (This Student)</th>';
    //     $html['thsource'] .= '<th>Select</th>';
    //     foreach ($data as $key => $std) {
    //         $registrationfee = FeeCategoryAmount::where('fee_category_id', $fee_category_id)->where('class_id', $std->class_id)->first();
    //         $accountstudentfees = StudentFee::where('student_id', $std->student_id)->where('year_id', $std->year_id)->where('class_id', $std->class_id)->where('fee_category_id', $fee_category_id)->where('date', $date)->first();
    //         if ($accountstudentfees != null) {
    //             $checked = 'checked';
    //         } else {
    //             $checked = '';
    //         }
    //         $color = 'success';
    //         $html[$key]['tdsource']  = '<td>' . $std['student']['id_no'] . '<input type="hidden" name="fee_category_id" value= " ' . $fee_category_id . ' " >' . '</td>';
    //         $html[$key]['tdsource']  .= '<td>' . $std['student']['name'] . '<input type="hidden" name="year_id" value= " ' . $std->year_id . ' " >' . '</td>';
    //         $html[$key]['tdsource']  .= '<td>' . $std['student']['fname'] . '<input type="hidden" name="class_id" value= " ' . $std->class_id . ' " >' . '</td>';
    //         $html[$key]['tdsource']  .= '<td>' . $registrationfee->amount . '$' . '<input type="hidden" name="date" value= " ' . $date . ' " >' . '</td>';
    //         $html[$key]['tdsource'] .= '<td>' . $std['discount']['discount'] . '%' . '</td>';
    //         $orginalfee = $registrationfee->amount;
    //         $discount = $std['discount']['discount'];
    //         $discountablefee = $discount / 100 * $orginalfee;
    //         $finalfee = (int)$orginalfee - (int)$discountablefee;
    //         $html[$key]['tdsource'] .= '<td>' . '<input type="text" name="amount[]" value="' . $finalfee . ' " class="form-control" readonly' . '</td>';
    //         $html[$key]['tdsource'] .= '<td>' . '<input type="hidden" name="student_id[]" value="' . $std->student_id . '">' . '<input type="checkbox" name="checkmanage[]" id="' . $key . '" value="' . $key . '" ' . $checked . ' style="transform: scale(1.5);margin-left: 10px;"> <label for="' . $key . '"> </label> ' . '</td>';
    //     }
    //     return response()->json(@$html);
    // } // end mehtod

    public function StudentFeeUpdate(StudentFeeFormRequest $request, $student_id)
    {
        $data = $request->validated();
        $student = Student::find($student_id);
        $student->fee_id = $data['fee_id'];
        $student->paid_amount = $data['paid_amount'];
        $difference = $student['fee_id'] - $data['paid_amount'];
        $student->updated_fee = $difference;
        $student->update();
        session()->flash('success', 'student accounts updated succesfully');
        return redirect('accounts/student/fee/keyin');
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
