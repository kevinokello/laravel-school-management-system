<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        if ($role == '1') {
            return view('dashboard.index');
        }
        if ($role == '2') {
            return view('teacher.index');
        } else {
            return view('student.index');
        }
    }
}
