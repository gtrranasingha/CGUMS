<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Programme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Programme_Controller extends Controller
{
    public function index(){
        if(session()->has('counsellor_user')){
            $programme=DB::table('programmes')-> orderBy('created_at','desc') -> get();
            return view('cgu.CGU Programmes Table')->with('programme_data',$programme);
         }
         return redirect('/cc'); 
    }
    public function addProgramme(){
        if(session()->has('counsellor_user')){
            return view('cgu.CGU Add Programmes');
         }
         return redirect('/cc'); 
    }
    public function addProgrammeSavedata(Request $request){
        //dd($request->all());
        $this->validate($request,[
            'name'=>'required|max:200|min:3',
            'type'=>'required|max:250|min:3',
            'date'=>'required|max:250|min:3',
            'time'=>'required|max:250|min:3',
            'venue'=>'required|max:250|min:5',
            'details'=>'required|max:250|min:5',
            'resource_person'=>'required|max:250|min:3',
            'capacity'=>'required',
            
            
            ]
        );
        $programme =new Programme();
            $programme->P_name=$request->name;
            $programme->P_type=$request->type;
            $programme->P_date=$request->date;
            $programme->P_time=$request->time;
            $programme->P_venue=$request->venue;
            $programme->P_details=$request->details;
            $programme->P_resourceperson =$request->resource_person;
            $programme->capacity=$request->capacity;
                $data=$programme->save();
                if($data){
                    return redirect('/cc/career_counsellor_dashbord/programme');
                }else{
                        return redirect()->back();
                }
    }
    public function viewProgramme($id){
        if(session()->has('counsellor_user')){
            $programme=Programme::find($id);
            return view('cgu.CGU Programme View')->with('programme_data',$programme);
         }
         return redirect('/cc'); 
    }
    public function editProgramme($id){
        if(session()->has('counsellor_user')){
            $programme=Programme::find($id);
            return view('cgu.CGU Edit Programmes')->with('programme_data',$programme);
         }
         return redirect('/cc'); 
    }
    public function editProgrammeSavedata($id,Request $request){
         //dd($request->all());
         $this->validate($request,[
            'name'=>'required|max:200|min:3',
            'type'=>'required|max:250|min:3',
            'date'=>'required|max:250|min:3',
            'time'=>'required|max:250|min:3',       
            'venue'=>'required|max:250|min:5',
            'details'=>'required|max:250|min:5',
            'resource_person'=>'required|max:250|min:3',
            'capacity'=>'required',
            
            
            ]
        );
        $programme = Programme::find($id);
            $programme->P_name=$request->name;
            $programme->P_type=$request->type;
            $programme->P_date=$request->date;
            $programme->P_time=$request->time;
            $programme->P_venue=$request->venue;
            $programme->P_details=$request->details;
            $programme->P_resourceperson =$request->resource_person;
            $programme->capacity=$request->capacity;
                $data=$programme->save();
                if($data){
                    return redirect('/cc/career_counsellor_dashbord/programme');
                }else{
                        return redirect()->back();
                }

    }
    public function removeProgramme($id){
        $programme=Programme::find($id);
        $programme->delete();
        return redirect()->back();
    }
    public function showProgrammes(){
        if(session()->has('student_userId')){
            $programme=DB::table('programmes')-> orderBy('created_at','desc') -> get();
            return view('studentUI.Programmes')->with('programme_data',$programme);
         }
         return redirect('/welcome');        
    }
    public function enroll($id){
        $count=DB::table('programmes')->where('id',$id)->value('capacity');
        $current_count = (int)count(DB::select('select id from enrollments where P_id=?',[$id]));
        if($current_count<$count){
                $enro=new Enrollment();
                $enro->P_id=$id;
                $enro->St_id=session('student_id');
                $enro->save();
                return redirect()->back();

        }else{
            return redirect()->back()->with('error_message', 'enrollments was Fulled!');
        }

    }
    public function cancel($id){
        $enro=Enrollment::find($id);
        $enro->delete();
        return redirect()->back();
    }
    public function enrollProgramme($id){
        if(session()->has('counsellor_user')){
            $programmes_data= DB::select('SELECT enrollments.created_at,students.St_id,students.uni_email from  enrollments  LEFT JOIN students  ON  students.St_id=enrollments.St_id WHERE enrollments.P_id=?',[$id]);
            return view('cgu.CGU View Enrollments')->with('datas',$programmes_data);
         }
         return redirect('/cc'); 
    }
}
