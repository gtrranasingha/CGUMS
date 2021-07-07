<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use League\CommonMark\Inline\Element\Code;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        if(isset($_POST['submit']) && Str::contains($_POST['email'], '.ruh.ac.lk')){

            $this->validate($request,[
                'email'=>'required|max:191|min:5|email|unique:users',
            ]
            );
    
        
            $email=$request->email;
            $code=rand(100000,1000000);
            $details = [
            'title' => '',
            'body' => '
            Dear Student,

            Please verify your  email address to countinue the registration process.

            Your Verification code is  '. $code.'

            Thank You!

            Best Regards,
            Career Guidance Unit,
            University of Ruhuna
            '
        ];
        Mail::to($email)->send(new TestMail($details));
        $request->session()->put('code',$code);
        return redirect('/request_register/sendemail/confirm');
    
        }
        else{
            return redirect()->back()->with('error_message', 'Request Failed!');
        }
       
    }
    public function confirmEmail(Request $request){
        if(isset($_POST['submit'])){

            $this->validate($request,[
                'number'=>'required|max:6|min:4',
            ]
            );
            $number=$request->number;
            $code = session('code');
            if($number==$code){
                return redirect('/request_register/sendemail/confirm/savenumber/send');

            }else{
                return redirect('/request_register/sendemail/confirm/error');
            }
          
    
        }
        else{
            return redirect()->back()->with('error_message', 'Request Failed!');
        }

    }
}
