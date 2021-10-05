<?php

namespace App\Http\Controllers;

use App\Models\Career_Counsellor_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class Career_Counsellor_UserController extends Controller
{
        public function register(Request $request){
                $cc_user=new Career_Counsellor_user();
                //dd($request->all());
                $this->validate($request,[
                    'name'=>'required|max:20|min:5|unique:career__counsellor_users',
                    'password'=>'required|max:191|min:3',
                    'coun_name'=>'required|unique:career__counsellor_users|max:191|min:3',
                    ]
                );
                   
                            $cc_user->name=$request->name;
                            $cc_user->coun_name=$request->coun_name;
                            $shpassword=sha1($request->password);
                            $cc_user->password=$shpassword;
                            $cc_user->save();
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
    
            $data= DB::select('select id from  career__counsellor_users where name=? and password=?',[$name, $password]);
            
            // print_r($data);
            if(count($data)){
                $id=DB::table('career__counsellor_users')->where('name',$name)->value('id');
                $user=Career_Counsellor_user::find($id);
                //$path=$request->input();
                $request->session()->put('counsellor_userId',$id);
                $request->session()->put('counsellor_user',$user['coun_name']);
             return redirect('/cc/career_counsellor_dashbord');
            }
            else{
             return redirect()->back()->with('error_message', 'Account is Incorrect!');
            }
        }
        public function updateProfile($id){
            if(session()->has('counsellor_user')){
                $user=Career_Counsellor_user::find($id);
                return view('auth.career_counsellor_update')->with('counsellor_user_data',$user);
             }
             return redirect('/cc');    
        }
        public function edit(Request $request,$id){
            //dd($request->all());
            if(session()->has('counsellor_user')){
                $this->validate($request,[
                    'name'=>'required|max:191|min:5',
                    'coun_name'=>'required|max:191|min:5',
                    ]
                );
    
                $user=Career_Counsellor_user::find($id);
                $user->name=$request->name;
                $user->coun_name=$request->coun_name;
                $rst=$user->update();
                if($rst){
                    $user=Career_Counsellor_user::find($id);
                    $request->session()->put('counsellor_user',$user['coun_name']);
                    return redirect()->back()->with('message', 'successfully updated');
                }else{
                    return redirect()->back()->with('error_message', 'failed to  update');
                }
             }
             return redirect('/cc');   
        }
        public function changePassword($id){
            if(session()->has('counsellor_user')){
                $ID= Crypt::decrypt($id); 
                $user=Career_Counsellor_user::find($ID);
                return view('cgu.CGU User Profile')->with('counsellor_user_data',$user);
             }
             return redirect('/cc');   
        }
        public function resetPassword(Request $request,$id){
            if(session()->has('counsellor_user')){
                $this->validate($request, [
                    'oldpassword' => 'required',
                    'newpassword' => 'required|max:191|min:5',
                    'confirmpassword' => 'required|same:newpassword'
                ]);
                $shpassword=sha1($request->oldpassword);
                $password=$shpassword;
                $data= DB::select('select * from career__counsellor_users where id=? and password=? limit 1',[$id, $password]);
                //print_r($data);
                if(count($data)){
                    $user=Career_Counsellor_user::find($id);
                    $newpassword=sha1($request->newpassword);
                    $user->password=$newpassword;
                    $user->update();
                    return redirect()->back()->with('message', 'successfully updated');
                }else{
                    return redirect()->back()->with('error_message', 'Invalid Old password!');
                }
            
             }
             return redirect('/cc');  
        }
}
