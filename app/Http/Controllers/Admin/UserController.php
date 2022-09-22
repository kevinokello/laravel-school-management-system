<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Admin\UserFormRequest;

class UserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $schools = School::where('status', '1')->get();
        return view('dashboard.users.create', compact('schools'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(UserFormRequest $request)
    {
        $data = $request->validated();
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'school_id' => $request->school_id,
        ]);
        Session::push('user', [
            'id' => $request['id'],
            'name' => $request['name'],
            'email' => $request['email'],
            'school_id' => $request['school_id']
        ]);
        $user->attachRole($request->role_id);
        // $user->attachRole('admin');
        $user->save();
        session()->flash('success', 'user created succesfully');
        return redirect('users/all');
    }


    public function view()
    {
        $users = User::where('status', '1')->get();
        return view('dashboard.users.all', compact('users'));
    }
    public function edit($user_id)
    {
        $schools = School::where('status', '1')->get();
        $user = User::findOrFail($user_id);
        return view('dashboard.users.edit', compact(['user', 'schools']));
    }
    public function update(Request $request, $user_id)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'school_id' => $request->school_id,
        ]);
        Session::push('user', [
            'id' => $request['id'],
            'name' => $request['name'],
            'email' => $request['email'],
            'school_id' => $request['school_id']
        ]);
        $user->attachRole($request->role_id);
        // $user->attachRole('admin');
        $user->update();
        session()->flash('success', 'user info updated succesfully');
        return redirect('users/all');
    }
    public function destroy($user_id)
    {
        $users = User::find($user_id);
        if ($users) {
            $users->delete();
            session()->flash('success', 'user deleted succesfully');
            return redirect()->back();
        } else {
            session()->flash('danger', 'no user id found');
            return redirect()->back();
        }
        session()->flash('success', 'user deleted succesfully');
        return view('dashboard.users.all');
    }
}
