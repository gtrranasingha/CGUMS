<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmMail;
use App\Models\ApplyJob;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Company_Controller extends Controller
{
    public function index(){
        if(session()->has('company_userId')){
            $data= DB::select('select * from companies where Com_name=? LIMIT 1',[session('company_user')]);
                if($data){
                    return view('compantUI.profile_edit')->with('datas',$data);
                }else{
                    return view('compantUI.profile_register');
                }
            
         }
         return redirect('/company');    
    }
    public function registerProfile(Request $request){
        $company=new  Company();
        $this->validate($request,[
            'web_site'=>'required|max:100|min:5',
            'reg_number'=>'required|max:100|min:3',
            'email'=>'required|email|unique:companies',
            'contact_number'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address'=>'required|max:200|min:10',
            'description'=>'required|max:2000|min:10',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]
        );
         $logo_path = $request->image;
         $logo_name=time().'_'.$logo_path ->getClientOriginalName();
         $request->image->move('logo', $logo_name);
         //$request->image->store('logo','public');

        $company->Com_name=$request->comp_name;
        $company->Com_id=$request->reg_number;
        $company->Com_description=$request->description;
        $company->comp_tel=$request->contact_number;
        $company->comp_address=$request->address;
        $company->email=$request->email;
        $company->web=$request->web_site;
        $company->logo=$logo_name;

       $done= $company->save();
        if( $done){
            return redirect('/company/company_dashbord');
        }else{
            return redirect()->back();
        }




    }
    public function editeProfile(Request $request,$id){
        $this->validate($request,[
            'web_site'=>'required|max:100|min:5',
            'reg_number'=>'required|max:100|min:3',
            'email'=>'required|email',
            'contact_number'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address'=>'required|max:200|min:10',
            'description'=>'required|max:2000|min:10',
            'image'=>'mimes:jpeg,png,jpg,gif|max:2048',
            ]
        );
        $ID = Crypt::decrypt($id);
        $company=Company::find($ID);
        $logo_path = $request->image;
       
        
       
        if(empty($logo_path)){
        $company->Com_name=$request->comp_name;
        $company->Com_id=$request->reg_number;
        $company->Com_description=$request->description;
        $company->comp_tel=$request->contact_number;
        $company->comp_address=$request->address;
        $company->email=$request->email;
        $company->web=$request->web_site;
        $done= $company->update();
        }else{
            $logo_name=time().'_'.$logo_path ->getClientOriginalName();
            $request->image->move('logo', $logo_name);
        $company->Com_name=$request->comp_name;
        $company->Com_id=$request->reg_number;
        $company->Com_description=$request->description;
        $company->comp_tel=$request->contact_number;
        $company->comp_address=$request->address;
        $company->email=$request->email;
        $company->web=$request->web_site;
        $company->logo=$logo_name;
        $done= $company->update();
        }

       
        if( $done){
            return redirect('/company/company_dashbord');
        }else{
            return redirect()->back();
        }


    }
    public function accept($id){
        $ID= Crypt::decrypt($id); 
        $vacancy_data=ApplyJob::find($ID);
        $comid=DB::table('companies')->where('Com_name',session('company_user'))->value('id');
        $company_data=Company::find($comid);
        
        // $job->confirmed=true; 
        // $job->update();
        return view('compantUI.Company Schedule Interviews',['jvdata'=>$vacancy_data,'datas'=>$company_data]);   
    }
    public function pending($id){
        $ID= Crypt::decrypt($id); 
        $job=ApplyJob::find($ID); 
        $job->confirmed=false; 
        $job->update();
        return redirect()->back();

    }

    public function showProfile(){
        if(session()->has('company_userId')){
            $data= DB::select('select * from companies where Com_name=? LIMIT 1',[session('company_user')]);
                if($data){
                    return view('compantUI.Company Profile View')->with('datas',$data);
                }else{
                    return view('compantUI.profile_register');
                }
            
         }
         return redirect('/company');   
    }
    public function sendMail(Request $request,$id){
        $this->validate($request,[
            'location'=>'required',
            'date'=>'required',
            'time'=>'required'
            ]
        );
        $st_name=$request->st_name;
        $st_email=$request->st_email;
        $position=$request->position;
        $comp_name=$request->comp_name;
        $comp_email=$request->comp_email;
        $comp_tel=$request->comp_tel;
        $location=$request->location;
        $date=$request->date;
        $time=$request->time;

        $details = [
            'title' => 'Invitation to Interview',
            'body' => '
            Dear  '.$st_name.',

            Thank you for applying for the position of  '.$position.' in  '. $comp_name.'.
            We would like to invite you to an interview for the position. Your interview has
            been scheduled for  '. $date .'.'.   $time.'., at  '. $location.'.
            Please call us at  '.  $comp_tel.' or email at  '. $comp_email.'
            if you have any questions or need to reschedule.

            Thank you & stay safe!
            Sincerely,
            Human Resources
            '.$comp_name.'
            '
        ];
        Mail::to($st_email)->send(new ConfirmMail($details));
        $ID= Crypt::decrypt($id); 
        $job=ApplyJob::find($ID); 
        $job->confirmed=true; 
        $job->update();
        return redirect('/company/company_dashbord/View_applications');
    //    if($send){
    //     $ID= Crypt::decrypt($id); 
    //     $job=ApplyJob::find($ID); 
    //     $job->confirmed=true; 
    //     $job->update();
    //     return redirect('/company/company_dashbord/View_applications');
        //}//else{
    //     return redirect()->back()->with('error_message', 'Request Failed!');
    //    }
       
       
    
       
       

    }
}
