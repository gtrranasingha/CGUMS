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
            $data= DB::select('select id from sessions  where St_id=? and s_date=?',[session('student_id'), $date]);
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
            $data= DB::select('select id from sessions  where St_id=? and s_date=?',[session('student_id'), $date]);
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
    public function showCcsession(){
        if(session()->has('counsellor_user')){
            $count=DB::table('sessions')->where('s_type',"Career Counselling Session")-> orderBy('id','desc') ->get();
            return view('cgu.CGU Career Counselling Session')->with('datas', $count);
         }
         return redirect('/cc'); 

    }
    public function showMockinterview(){
        if(session()->has('counsellor_user')){
          
            $count=Session::where('s_type',"Online Mock Interview")->orwhere('s_type',"In-Person Mock Interview")-> orderBy('id','desc')->get();
            return view('cgu.CGU Mock Interview')->with('datas', $count);
         }
         return redirect('/cc'); 

    }
    public function selectSession($id){
            $session=Session::find($id);
            $session->confirmed=1;
            $session->save();
            return redirect()->back();
           // dd($id);

    }
    public function RemoveSession($id){
        $session=Session::find($id);
        $session->delete();
            return redirect()->back();
    }

}
