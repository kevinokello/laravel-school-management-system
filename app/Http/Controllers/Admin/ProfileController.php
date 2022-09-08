<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function ProfileView()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('dashboard.user.view_profile', compact('user'));
    }
    public function ProfileEdit()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('dashboard.user.edit_profile', compact('editData'));
    }

    public function ProfileStore(Request $request)
    {

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->gender = $request->gender;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['image'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect('profile/view')->with($notification);
    } // End Method
    public function PasswordView()
    {
        return view('dashboard.user.edit_password');
    }

    public function PasswordUpdate(Request $request)
    {
        if (!(Hash::check($request->get('oldpassword'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password is incorrect.");
        }
        if (strcmp($request->get('oldpassword'), $request->get('password')) == 0) {
            // Current password and new password same
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
        $validatedData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with("success", "Password successfully changed!");
    }
}
