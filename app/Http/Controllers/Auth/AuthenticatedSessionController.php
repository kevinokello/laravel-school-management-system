<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Auth\LoginRequest;
use Symfony\Component\Console\Helper\Table;

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
        $request->authenticate();
        $data = $request->input();
        $sid = DB::table('users')->where('email', $data['email'])->first()->school_id;
        // $request->validate([
        //     'email'    => 'required|string',
        //     'password' => 'required|string',
        // ]);
        // $email = $request->email;
        // $password = $request->password;
        // if (Auth::attempt(['email' => $email, 'password' => $password, 'status' => 'Active'])) {
        //     $user = Auth::User();
        //     Session::put('name', $user->name);
        // } else {
        //     return redirect('login');
        // }
        session(['school_id' => $sid]);
        return redirect()->intended(RouteServiceProvider::HOME);
    }

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
        Session::flush();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
