<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class Student_Controller extends Controller
{
    public function index(){
        if(session()->has('student_userId')){

            $data= DB::select('select * from students where St_id=? and uni_email=?  LIMIT 1',[session('student_id'),session('student_email')]);
                if($data){
                    $faculty['data'] =Faculty::orderby("faculties","asc")
                    ->select('id','faculties')
                     ->get();
                    return view('studentUI.profile')->with('datas',$data)->with("faculty",$faculty);
                }
            
         }
         return redirect('/welcome');   
    }
    public function register(Request $request){
        $student=new Student();
        $this->validate($request,[
            'first_name'=>'required|max:50|min:5',
            'last_name'=>'required|max:100|min:5',
            'per_email'=>'required|email',
            'mobile'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'nic'=>'required|max:20|min:5|unique:students',
            'per_address'=>'required|max:200|min:10',
            'mob_address'=>'required|max:200|min:10',
            'faculty'=>'required',
            'degree'=>'required',
            'gpa'=>'required',
             'cv'=>'mimes:csv,txt,xlx,xls,pdf|max:2048',
            'image'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]
        );
        //$cv_path = $request->cv->store('cv','public');
         $image_path =$request->image->store('image','public');
        // $request->image->move(public_path('image'),$image_path);
        $cv_path = $request->cv;
        $cv_name=time().'_'.$cv_path->getClientOriginalName();
        $request->cv->move('cv', $cv_name);


        $student->St_id=$request->St_id;
        $st_id=$student->St_id;
        $student->uni_email=$request->uni_email;
        $student->f_name=$request->first_name;
        $student->l_name=$request->last_name;
        $student->personal_email=$request->per_email;
        $student->mobile=$request->mobile;
        $student->nic=$request->nic;
        $student->per_address=$request->per_address;
        $student->mob_address=$request->mob_address;
        $student->faculty=$request->faculty;
        $student->degree=$request->degree;
        $student->gpa=$request->gpa;
        $student->cv=$cv_name;
        $student->image=$image_path;
        $done=$student->save();
            if($done){
                $id=DB::table('students')->where('St_id',$st_id)->value('id');
                $user=Student::find($id);
                if(!empty($user['cv'])){
                    $request->session()->put('cv',$user['cv']);
                }
                return redirect('/welcome');
            }




    }
    public function editProfile(Request $request,$id){
        $ID = Crypt::decrypt($id);
        $this->validate($request,[
            'first_name'=>'required|max:50|min:5',
            'last_name'=>'required|max:100|min:5',
            'per_email'=>'required|email',
            'mobile'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'nic'=>'required|max:20|min:5',
            'per_address'=>'required|max:200|min:10',
            'mob_address'=>'required|max:200|min:10',
            'faculty'=>'required',
            'degree'=>'required',
            'gpa'=>'required',
             'cv'=>'mimes:csv,txt,xlx,xls,pdf|max:2048',
            'image'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]
        );
        $student=Student::find($ID);
         //$cv_path = $request->cv->store('cv','public');
        
         
        // $request->image->move(public_path('image'),$image_path);
        $cv_path = $request->cv;
       

        if(empty($request->image) && empty($cv_path)){
            $student->St_id=$request->St_id;
            $st_id=$student->St_id;
            $student->uni_email=$request->uni_email;
            $student->f_name=$request->first_name;
            $student->l_name=$request->last_name;
            $student->personal_email=$request->per_email;
            $student->mobile=$request->mobile;
            $student->nic=$request->nic;
            $student->per_address=$request->per_address;
            $student->mob_address=$request->mob_address;
            $student->faculty=$request->faculty;
            $student->degree=$request->degree;
            $student->gpa=$request->gpa;
            $done=$student->update();
            if($done){
                $id=DB::table('students')->where('St_id',$st_id)->value('id');
                $user=Student::find($id);
                if(!empty($user['cv'])){
                    $request->session()->put('cv',$user['cv']);
                }
                return redirect('/welcome');
            }

        }elseif(empty($request->image)){
            $cv_name=time().'_'.$cv_path->getClientOriginalName();
            $request->cv->move('cv', $cv_name);

            $student->St_id=$request->St_id;
            $st_id=$student->St_id;
            $student->uni_email=$request->uni_email;
            $student->f_name=$request->first_name;
            $student->l_name=$request->last_name;
            $student->personal_email=$request->per_email;
            $student->mobile=$request->mobile;
            $student->nic=$request->nic;
            $student->per_address=$request->per_address;
            $student->mob_address=$request->mob_address;
            $student->faculty=$request->faculty;
            $student->degree=$request->degree;
            $student->gpa=$request->gpa;
            $student->cv=$cv_name;
            $done=$student->update();
            if($done){
                $id=DB::table('students')->where('St_id',$st_id)->value('id');
                $user=Student::find($id);
                if(!empty($user['cv'])){
                    $request->session()->put('cv',$user['cv']);
                }
                return redirect('/welcome');
            }

        }elseif(empty($cv_path)){
            $image_path =$request->image->store('image','public');

            $student->St_id=$request->St_id;
            $st_id=$student->St_id;
            $student->uni_email=$request->uni_email;
            $student->f_name=$request->first_name;
            $student->l_name=$request->last_name;
            $student->personal_email=$request->per_email;
            $student->mobile=$request->mobile;
            $student->nic=$request->nic;
            $student->per_address=$request->per_address;
            $student->mob_address=$request->mob_address;
            $student->faculty=$request->faculty;
            $student->degree=$request->degree;
            $student->gpa=$request->gpa;
            $student->image=$image_path;
            $done=$student->update();
            if($done){
                $id=DB::table('students')->where('St_id',$st_id)->value('id');
                $user=Student::find($id);
                if(!empty($user['cv'])){
                    $request->session()->put('cv',$user['cv']);
                }
                return redirect('/welcome');
            }

        }else{
            $cv_name=time().'_'.$cv_path->getClientOriginalName();
            $request->cv->move('cv', $cv_name);
            $image_path =$request->image->store('image','public');
        $student->St_id=$request->St_id;
        $st_id=$student->St_id;
        $student->uni_email=$request->uni_email;
        $student->f_name=$request->first_name;
        $student->l_name=$request->last_name;
        $student->personal_email=$request->per_email;
        $student->mobile=$request->mobile;
        $student->nic=$request->nic;
        $student->per_address=$request->per_address;
        $student->mob_address=$request->mob_address;
        $student->faculty=$request->faculty;
        $student->degree=$request->degree;
        $student->gpa=$request->gpa;
        $student->cv=$cv_name;
        $student->image=$image_path;
        $done=$student->update();
        if($done){
            $id=DB::table('students')->where('St_id',$st_id)->value('id');
            $user=Student::find($id);
            if(!empty($user['cv'])){
                $request->session()->put('cv',$user['cv']);
            }
            return redirect('/welcome');
        }

        }
    }
}
