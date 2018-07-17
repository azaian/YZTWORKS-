<?php

namespace App\Http\Controllers;

use App\User;
use App\User_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
    }

    public function getIndex()
    {
        if (Auth::user()->isAdmin()) {
            return redirect('/admin');
        } else {
            return view('profile');
        }

    }

    public function postUpdateData(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();
        $userdetails = User_details::where('user_id', $user->id)->first();
        if (!Hash::check($request->input('oldpassword'), $user->password)) {
            $error = 'invalid password';
            Session::flash('error', $error);
            return redirect('/profile');
        } else {
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $userdetails->phone = $request->input('phone');
            $userdetails->job_title = $request->input('job_title');
            $userdetails->job_title = $request->input('job_title');
            $userdetails->city = $request->input('city');
            $userdetails->website = $request->input('website');
            $userdetails->business = $request->input('business');
            $userdetails->project_requirement = $request->input('project_requirement');
            $user->update();
            $userdetails->update();
            $msg = 'data updated successfully';
            Session::flash('msg', $msg);
            return redirect('/profile');
        }
    }

    public function getChangePassword()
    {
        return view('changepassword');
    }

    public function postChangePassword(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if (!Hash::check($request->input('oldpassword'), $user->password)) {
           $error="invalid old password";
            Session::flash('error-oldpass', $error);
            return redirect('/profile/change-password');
        }elseif($request->input('password1')!=$request->input('password2')){
            $error="new password is not matched";
            Session::flash('error-pass', $error);
            return redirect('/profile/change-password');
        }else{
            $user->password=bcrypt($request->input('password1'));
            $user->update();
            
            $msg="password changed successfully";
            Session::flash('msg', $msg);
            return redirect('/profile');
        }
    }
}
