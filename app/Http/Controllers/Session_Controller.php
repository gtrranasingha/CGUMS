<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Session_Controller extends Controller
{
    public function index(){
        if(session()->has('student_user')){
            return view('studentUI.Career Counselling Session');
         }
         return redirect('/welcome');
    }
    public function getAppoinment(Request $request){
        if(session()->has('student_user')){
            $this->validate($request,[
                'appointment_date'=>'required',
                'appointment_time'=>'required'
               
                ]
            );
            $date=$request->appointment_date;
            $time=$request->appointment_time;
            $data= DB::select('select s_no from sessions  where St_id=? and s_date=?',[session('student_id'), $date]);
            if(count($data)){
                return redirect()->back()->with('err_message', 'You requested this date!');
            }else{
                $session=new Session();
                $session->St_id=session('student_id');
                $session->s_type="Career Counselling Session";
                $session->s_date=$date;
                $session->s_time=$time;
                $done=$session->save();
                    if($done){
                        return redirect()->back()->with('message', 'Successfully!');
                    }


            }
         }
         return redirect('/welcome');
    }
    public function mockIndex(){
        if(session()->has('student_user')){
            return view('studentUI.Mock Interviews');
         }
         return redirect('/welcome');

    }
    public function getMock(Request $request){
        if(session()->has('student_user')){
            $this->validate($request,[
                'appointment_name'=>'required',
                'appointment_date'=>'required',
                'appointment_time'=>'required'
               
                ]
            );
            $name=$request->appointment_name;
            $date=$request->appointment_date;
            $time=$request->appointment_time;
            $data= DB::select('select s_no from sessions  where St_id=? and s_date=?',[session('student_id'), $date]);
            if(count($data)){
                return redirect()->back()->with('err_message', 'You requested this date!');
            }else{
                $session=new Session();
                $session->St_id=session('student_id');
                $session->s_type=$name;
                $session->s_date=$date;
                $session->s_time=$time;
                $done=$session->save();
                    if($done){
                        return redirect()->back()->with('message', 'Successfully!');
                    }


            }
         }
         return redirect('/welcome');
    }

}
