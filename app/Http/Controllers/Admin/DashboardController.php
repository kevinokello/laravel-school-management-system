<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('teacher'))
        {
            return view('teacher.index');
        }
        elseif (Auth::user()->hasRole('admin')) {
            return view('dashboard.index');
        }
         elseif (Auth::user()->hasRole('student')) {
            return view('student.index');
        }

    }
}
