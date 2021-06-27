<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        if(isset($_POST['submit'])){

            $this->validate($request,[
                'email'=>'required|max:191|min:5|email|unique:users',
            ]
            );
    
        
            $email=$request->email;
            $code=rand(10000,100000);
            $details = [
            'title' => 'Test CGUMS mail',
            'body' => 'Hi My friends, your code is '. $code
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
                'number'=>'required|max:5|min:4',
            ]
            );
            $number=$request->number;
            $code = session('code');
            if($number==$code){
                return redirect('/request_register/sendemail/confirm/savenumbe/register');

            }else{
                return redirect()->back()->with('error_message', 'Invalid code!');
            }
          
    
        }
        else{
            return redirect()->back()->with('error_message', 'Request Failed!');
        }

    }
}
