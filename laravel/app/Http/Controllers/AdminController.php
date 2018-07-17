<?php

namespace App\Http\Controllers;

use App\User_details;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class AdminController extends Controller
{
    public function getIndex()
    {
        return view('cpanel.cpanel');

    }

    public function getAddAdmin()
    {
        $admins = User::where('admin', 1)->get();
        return view('cpanel.add_admin')->withadmins($admins);
    }

    public function getDeleteAdmin($id)
    {
        $admin = User::find($id);
        $admin->admin = 0;
        $admin->update();
        session()->push('msg', $admin->email . ' admin deleted');
        $admins = User::where('admin', 1)->get();
        return redirect('admin/add-admin')->withadmins($admins);
    }

    public function postAddAdmin(Request $request)
    {
        $admins = User::where('admin', 1)->get();
        $msg = null;
        $email = $request->input('email');
        $user = User::where('email', $email)->first();
        if (!empty($user)) {
            if ($user->admin == 1) {
                $msg = $user->email . " is already and admin";
            } else {
                $user->admin = 1;
                $user->update();
               
                $msg = $user->email . " is now an admin ";
            }
        } else {
            $msg = "not registered email";
        }
        session()->push('msg', $msg);
        return redirect('admin/add-admin')->withadmins($admins);
    }

    public function getUsersData(){
        $users=User::where('admin',0)->get();
        return view('cpanel.users')->withusers($users);
    }
    public function getUser_details($id){
        $user=User::find($id);
        return view('cpanel.user_details')->withuser($user);
    }

    public function getChangePassword()
    {
        return view('adminchangepassword');
    }

    public function postChangePassword(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if (!Hash::check($request->input('oldpassword'), $user->password)) {
            $error="invalid old password";
            Session::flash('error_oldpass', $error);
            return redirect('/admin/change-password');
        }elseif($request->input('password1')!=$request->input('password2')){
            $error="new password is not matched";
            Session::flash('error_pass', $error);
            return redirect('/admin/change-password');
        }else{
            $user->password=bcrypt($request->input('password1'));
            $user->update();

            $msg="password changed successfully";
            Session::flash('msg', $msg);
            return redirect('/admin');
        }
    }

}
