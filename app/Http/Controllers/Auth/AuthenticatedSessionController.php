<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */


    public function store(LoginRequest $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            // $adminCount = User::where(['email' => $data['email'], 'password' => Hash::make($data['password']), 'status' => 1])->count();
            $request->authenticate();
            if ($request) {
                $sid = DB::table('users')->where('email', $data['email'])->first();
                // return $sid->email;
                Session::put('email', $data['email']);
                return redirect('/dashboard');
            } else {
                //echo "failed"; die;
                session()->flash('danger', 'invalid email or password');
                return redirect()->back();
            }
        }
        return view('auth.login');
    }

    // public function store(LoginRequest $request)
    // {
    //     $request->authenticate();
    //     $request->session()->regenerate();
    //     Session::put('name', 'John');
    //     return redirect()->intended(RouteServiceProvider::HOME);
    // }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
