<?php

namespace App\Http\Controllers;
use App\Models\Comapany_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Company_UserController extends Controller
{
    public function register(Request $request){
        $company_user=new Comapany_user();
           
           $this->validate($request,[
            'name'=>'required|max:20|min:5|unique:comapany_users',
            'password'=>'required|max:191|min:3',
            'confirm_password' => 'required|same:password',
            'comp_name'=>'required|unique:comapany_users|max:191|min:3',
            ]
        );
        //dd($request->all());
                    $company_user->name=$request->name;
                    $company_user->comp_name=$request->comp_name;
                    $shpassword=sha1($request->password);
                    $company_user->password=$shpassword;
                    $company_user->save();
                    return redirect()->back()->with('message', 'You are successfully register');
    }
    public function login(Request $request){
        $this->validate($request,[
            'name'=>'required|max:20|min:5',
            'password'=>'required|max:191|min:3'
            ]
        );
        $name=$request->name;
        $shpassword=sha1($request->password);
        $password=$shpassword;

        $data= DB::select('select id from comapany_users where name=? and password=? and is_deleted=? ',[$name, $password,1]);
        
        // print_r($data);
        if(count($data)){
            $id=DB::table('comapany_users')->where('name', $name)->value('id');
            $user=Comapany_user::find($id);
            $request->session()->put('company_user',$user['comp_name']);
            $request->session()->put('company_userId',$id);
         return redirect('/company/company_dashbord');
        }
        else{
         return redirect()->back()->with('error_message', 'Account is Incorrect!');
        }
    }
    public function updateProfile($id){
        if(session()->has('company_user')){
            $user=Comapany_user::find($id);
            return view('auth.company_update')->with('company_user_data',$user);
         }
         return redirect('/company');    
    }
    public function edit(Request $request,$id){
        //dd($request->all());
        if(session()->has('company_user')){
            $this->validate($request,[
                'name'=>'required|max:191|min:5',
                'comp_name'=>'required|max:191|min:3',
                ]
            );

            $user=Comapany_user::find($id);
            $user->name=$request->name;
            $user->comp_name=$request->comp_name;
            $rst=$user->update();
            if($rst){
                $user=Comapany_user::find($id);
                $request->session()->put('company_user',$user['comp_name']);
                return redirect()->back()->with('message', 'successfully updated');
            }else{
                return redirect()->back()->with('error_message', 'failed to  update');
            }
         }
         return redirect('/company');   
    }
    public function changePassword($id){
        if(session()->has('company_user')){
            $user=Comapany_user::find($id);
            return view('compantUI.Company User Profile')->with('company_user_data',$user);
         }
         return redirect('/company');   
    }
    public function resetPassword(Request $request,$id){
        if(session()->has('company_user')){
            $this->validate($request, [
                'oldpassword' => 'required',
                'newpassword' => 'required|max:191|min:5',
                'confirmpassword' => 'required|same:newpassword'
            ]);
            $shpassword=sha1($request->oldpassword);
            $password=$shpassword;
            $data= DB::select('select * from comapany_users where id=? and password=? limit 1',[$id, $password]);
            //print_r($data);
            if(count($data)){
                $user=Comapany_user::find($id);
                $newpassword=sha1($request->newpassword);
                $user->password=$newpassword;
                $user->update();
                return redirect()->back()->with('message', 'successfully updated');
            }else{
                return redirect()->back()->with('error_message', 'failed to  update');
            }
        
         }
         return redirect('/company');  
    }

    public function viewCompanies(){
        if(session()->has('counsellor_user')){
            $company = DB::table('comapany_users')->leftJoin('companies','comapany_users.comp_name', '=','companies.Com_name')->select('comapany_users.*','companies.email') ->get();
            return view('cgu.CGU View Companies',['companies'=>$company]);
    }
            return redirect('/cc');
    }
    public function deactive($id){
        $company=Comapany_user::find($id);
        $company->is_deleted=0;
        $company->update();
        return redirect()->back();
    }
    public function active($id){
        $company=Comapany_user::find($id);
        $company->is_deleted=1;
        $company->update();
        return redirect()->back();
    }
}
