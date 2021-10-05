<?php

namespace App\Http\Controllers;

use App\Models\ApplyJob;
use App\Models\Job_Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class Job_Vacancy_Controller extends Controller
{
    public function register(Request $request ){
          //dd($request->all());
         
         $job = new Job_Vacancy();
         $this->validate($request,[
            'Job_name'=>'required|max:100|min:5',
            'job_type'=>'required',
            'deadline'=>'required',
            'companay_description'=>'required|max:2000|min:5',
            'job_description'=>'required|max:2000|min:5',
            'responsibilities'=>'required|max:2000|min:5',
            'qualifications'=>'required|max:2000|min:5',
            'additional'=>'required|max:2000|min:5',
            ]
        );
        $ldate = date('Y-m-d H:i:s');
        $logo=DB::table('companies')->where('Com_name', session('company_user'))->value('logo');

        $job->Jv_name=$request->Job_name;
        $job->Jv_type=$request->job_type;
        $job->Jv_deadline=$request->deadline;
        $job->comp_name=$request->comp_name;
        $job->comp_description=$request->companay_description;
        $job->Jv_description=$request->job_description;
        $job->Jv_respon=$request->responsibilities;
        $job->Jv_que=$request->qualifications;
        $job->Jv_addinfo=$request->additional;
        $job->Jv_essudate=$ldate;
        $job->img_path=$logo;

        $done=$job->save();
                if($done){
                    return redirect('/company/company_dashbord');
                }else{
                    return redirect()->back();
                }



    }
    public function index(){
        $data=Job_Vacancy::all();
        if(session()->has('student_user')){
            return view('studentUI.view_job_vacancies')->with('passdata',$data);
        }
       return redirect('/');
    }
    public function apply($id){
        $job=Job_Vacancy::find($id);
        if(session()->has('student_user')){
            return view('studentUI.apply_job_view')->with('jobs',$job);
         }
         return redirect('/'); 
    }
    public function request(Request $request,$id){
        $comp_name=DB::table('job__vacancies')->where('id', $id)->value('comp_name');
        $job_name=DB::table('job__vacancies')->where('id', $id)->value('Jv_name');
        $apply_job=new ApplyJob();
        $apply_job->comp_name=$comp_name;
        $apply_job->jv_name=$job_name;
        $apply_job->jv_id=$id;
        $apply_job->st_uid=session('student_id');
        $apply_job->st_name=session('student_user');
        $apply_job->st_email=session('student_email');
        $apply_job->st_cv=session('cv');
        //print_r(session('cv'));
      
            
                $data= DB::select('select id from apply_jobs  where st_uid=? and jv_id=? LIMIT 1',[session('student_id'), $id]);
                if(count($data)){
                    return redirect()->back(); 
                }else{
                    $done=$apply_job->save();
                    if($done){
                        return redirect('/welcome/job_vacancies');
                    }
                    
                }
                    

    }
    public function viewapplication(){
        $datas= DB::select('select * from  apply_jobs  where comp_name=?',[session('company_user')]);
        return view('compantUI.view_application')->with('data',$datas);
    }
    public function downloadeCv($st_cv){
                return response()->download(public_path('cv/'.$st_cv));
    }
    public function showVacancy(){
        $data=DB::select('select * from job__vacancies  where comp_name=?',[session('company_user')]);
        if(session()->has('company_userId')){
            return view('compantUI.view_company_vacancies')->with('passdata',$data);
        }
       return redirect('/company');

    }
    public function viewVacancy($id){
        $ID = Crypt::decrypt($id);
        $job=Job_Vacancy::find($ID);
        if(session()->has('company_userId')){
            return view('compantUI.view vacancies')->with('jobs',$job);
         }
         return redirect('/company'); 
    }
    public function editVacancy($id){
        $ID = Crypt::decrypt($id);
        $job=Job_Vacancy::find($ID);
        if(session()->has('company_userId')){
            return view('compantUI.edit_vacancies')->with('jobs',$job);
         }
         return redirect('/company'); 

    }
    public function saveEditVacancy($id,Request $request){
        $ID = Crypt::decrypt($id);
        $job=Job_Vacancy::find($ID);
        $this->validate($request,[
           'Job_name'=>'required|max:100|min:5',
           'job_type'=>'required',
           'deadline'=>'required',
           'companay_description'=>'required|max:2000|min:5',
           'job_description'=>'required|max:2000|min:5',
           'responsibilities'=>'required|max:2000|min:5',
           'qualifications'=>'required|max:2000|min:5',
           'additional'=>'required|max:2000|min:5',
           ]
       );
       $ldate = date('Y-m-d H:i:s');
       $logo=DB::table('companies')->where('Com_name', session('company_user'))->value('logo');

       $job->Jv_name=$request->Job_name;
       $job->Jv_type=$request->job_type;
       $job->Jv_deadline=$request->deadline;
       $job->comp_name=$request->comp_name;
       $job->comp_description=$request->companay_description;
       $job->Jv_description=$request->job_description;
       $job->Jv_respon=$request->responsibilities;
       $job->Jv_que=$request->qualifications;
       $job->Jv_addinfo=$request->additional;
       $job->Jv_essudate=$ldate;
       $job->img_path=$logo;

       $done=$job->update();
               if($done){
                   return redirect('/company/company_dashbord');
               }else{
                   return redirect()->back();
               }


    }
    public function deleteVacancy($id){
        $ID = Crypt::decrypt($id);
        $job=Job_Vacancy::find($ID);
        $done=$job->delete();
        if($done){
            return redirect('/company/company_dashbord');
        }else{
            return redirect()->back();
        }

    }
    public function cguShowVacancy(){
        $data=Job_Vacancy::all();
        if(session()->has('counsellor_user')){
            return view('cgu.CGU Show Job Vacancy')->with('passdata',$data);
        }
       return redirect('/cc');  
    }
    public function cguViewJob($id){
        $job=Job_Vacancy::find($id);
        if(session()->has('counsellor_user')){
            return view('cgu.CGU Find job Vacancy')->with('jobs',$job);
        }
       return redirect('/cc');  

    }
    public function cguRemoveJob($id){
        $job=Job_Vacancy::find($id);
        $done=$job->delete();
        if($done){
            return redirect('/cc/career_counsellor_dashbord/job_vacancies');
        }else{
            return redirect()->back();
        }
    }
}
