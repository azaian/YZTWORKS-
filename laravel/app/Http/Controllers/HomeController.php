<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('homepage');
    }

    public function getHome()
    {
        return view('home');
    }

    public function getVerify($email, $hash)
    {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $user = User::where('email', $email)->first();
            if (!empty($user)) {
                if (!$user->atcive) {
                    if ($user->hash == $hash) {
                        $user->active = 1;
                        $user->update();
                        $msg = $user->email . " are activated successfully ";
                    } else {
                        $msg = "error in verification email " . $user->email . " please recheck your mail";
                    }
                } else {
                    $msg = $user->email . ' user already activated';
                }
            } else {
                $msg = $email . ' email in not registered yet';
            }
            session()->push('msg', $msg);
            return view('verify');
        } else {
            return redirect('/');
        }
    }

    public function getActivation()
    {
        return view('checkmail');
    }

    public function getAgreement()
    {
        return view('agreement');
    }

    public function getAccept($hash, $id)
    {
        $user = User::findorfail($id);
        if ($id == $user->id && $hash == $user->hash) {
            $user->accept_contract = 1;
            $user->update();
        }
        return redirect('/');
    }

    public function getNewPassword($id, $password)
    {

        $user = User::find($id);
        $passwordold = str_replace(['/'], 'x', $user->password);
        if ($passwordold == $password) {
            return view('auth.resetpassword')->witholdpass($password)->withid($id);
        } else {
            return redirect('/');
        }
    }

    public function postNewPassword(Request $request)
    {
        $id = $request->input('id');
        $user = User::find($id);
        $new_password = $request->input('password');
        $user->password = bcrypt($new_password);
        $user->update();
        $msg = 'password for user ' . $user->email . ' changed successfully';
        session()->push('msg', $msg);
        return redirect('/activation');
    }

    public function postResetPassword(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();
        if (!empty($user)) {
            $this->sendverifymail($user);
            $msg = "please check your email : " . $user->email;
        } else {
            $msg = $email . ' in not register';
        }
        session()->push('msg', $msg);
        return view('checkmail');
    }


    private function sendverifymail($user)
    {
        $passwordold = str_replace(['/'], 'x', $user->password);
        $to = $user->email; // Send email to our user
        $subject = 'Yztworks change password'; // Give the email a subject
        $message = '
Dear ' . $user->name . '
 
To set a new password for your account Please click this link:

http://www.yztworks.com/new-password/' . $user->id . '/' . $passwordold . '
 
'; // Our message above including the link

        $headers = 'From:noreply@yztworks.com' . "\r\n"; // Set from headers
        mail($to, $subject, $message, $headers); // Send our email
    }

}
