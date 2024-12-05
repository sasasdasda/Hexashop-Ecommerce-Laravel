<?php

namespace App\Http\Controllers;

use App\Mail\SendLoginMail;
use App\Models\LoginMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function update_details($id){
        return view('users.update-user-details');
    }
    public function verfication_email($email){
        $email = ['email' => $email];
        return view('emails.send',$email);
    }
    public function verfication_email_send($email){

        // Verfication Code
        $code = implode([rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),]);

        $verfication = LoginMail::create([
            'user_email' => $email,
            'verfication_code'=>$code,
        ]);
        $data = [
            'email'=>$email,
            'code'=>$code
        ];
        $send = Mail::to($email)->send(new SendLoginMail($data));

        return redirect()->route('verfication.login.email',$email);
    }
    function verfiy_code(){
        return view('emails.verficationCode');
    }
    function verfiy_code_submit(Request $request){
        if(Auth::check()){
            // return 1;

            return redirect()->route('home');
        }
        $code = $request->code;
        $email = LoginMail::where('verfication_code',$code)->first();
        if($email){
            $user = User::where('email',$email->user_email)->first();
            $user->update([
                'email_verified_at'=>now()
            ]);
            // return 1;
            return redirect()->to(route('login'));
        }
        return redirect()->back()->with(['error'=>'Error Theres No Code Like This.']);
    }
    public function orders(){
        return view('users.orders');
    }
}
