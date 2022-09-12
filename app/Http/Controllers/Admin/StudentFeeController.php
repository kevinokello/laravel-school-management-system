<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cohort;
use App\Models\Student;
use App\Models\Academic;
use App\Models\StudentFee;
use App\Models\FeeCategory;
use Illuminate\Http\Request;
use App\Models\FeeCategoryAmount;
use App\Http\Controllers\Controller;

class StudentFeeController extends Controller
{
    public function StudentFeeView()
    {
        $data['allData'] = StudentFee::all();
        return view('dashboard.account.student.fee.view', $data);
    }


    public function StudentFeeAdd()
    {
        $students = Student::all();
        return view('dashboard.account.student.fee.add', compact('students'));
    }

    public function StudentFeeEdit()
    {
        $students = Student::all();
        return view('dashboard.account.student.fee.edit', compact('students'));
    }

    public function StudentFeeStore(Request $request)
    {

        $date = date('Y-m', strtotime($request->date));

        StudentFee::where('year_id', $request->year_id)->where('cohort_id', $request->cohort_id)->where('fee_category_id', $request->fee_category_id)->where('date', $request->date)->delete();

        $checkdata = $request->checkmanage;

        if ($checkdata != null) {
            for ($i = 0; $i < count($checkdata); $i++) {
                $data = new StudentFee();
                $data->year_id = $request->year_id;
                $data->cohort_id = $request->cohort_id;
                $data->date = $date;
                $data->fee_category_id = $request->fee_category_id;
                $data->student_id = $request->student_id[$checkdata[$i]];
                $data->amount = $request->amount[$checkdata[$i]];
                $data->save();
            } // end for loop
        } // end if

        if (!empty(@$data) || empty($checkdata)) {

            $notification = array(
                'message' => 'Well Done Data Successfully Updated',
                'alert-type' => 'success'
            );

            return redirect()->route('student.fee.view')->with($notification);
        } else {

            $notification = array(
                'message' => 'Sorry Data not Saved',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    } // end method



}
