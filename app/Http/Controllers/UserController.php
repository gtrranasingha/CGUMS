<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function register(Request $request){
                $user=new User();
                //validating
            $this->validate($request,[
                'name'=>'required|max:191|min:5',
                'password'=>'required|max:191|min:2',
                'student_name'=>'required|max:191|min:5',
                'email'=>'required|email|unique:users',
                ]
            );
                $user->name=$request->name;
                $user->student_name=$request->student_name;
                $user->email=$request->email;
                $shpassword=sha1($request->password);
                $user->password=$shpassword;
               $file= $user->save();
           // dd($request->all());
           if($file){
            $id=DB::table('users')->where('name', $user->name)->value('id');
            $user=User::find($id);
            $request->session()->put('student_user',$user['student_name']);
            $request->session()->put('student_userId',$id);
            return redirect('/welcome');
           }
           else{
            return redirect()->back()->with('error_message', 'Registetion Failed!');
           }
           
           
        
            
    }
    public function login(Request $request){
        // dd($resquest->all());
        $this->validate($request,[
            'name'=>'required|max:191|min:5',
            'password'=>'required|max:191|min:2'
           
            ]
        );
         $name=$request->name;
         $shpassword=sha1($request->password);
         $password=$shpassword;

        $data= DB::select('select id from users where name=? and password=?',[$name, $password]);
        
        // print_r($data);
        if(count($data)){
            $id=DB::table('users')->where('name', $name)->value('id');
            $user=User::find($id);
            $request->session()->put('student_user',$user['student_name']);
            $request->session()->put('student_userId',$id);
         return redirect('/welcome');
        }
        else{
            return redirect()->back()->with('error_message', 'Account is Incorrect!');
        }
    }
    public function updateProfile($id){
        if(session()->has('student_user')){
            $user=User::find($id);
            return view('auth.update')->with('student_user_data',$user);
         }
         return redirect('/welcome');    
    }
    public function edit(Request $request,$id){
        //dd($request->all());
        if(session()->has('student_user')){
            $this->validate($request,[
                'name'=>'required|max:191|min:5',
                'student_name'=>'required|max:191|min:5',
                'email'=>'required|email',
                ]
            );

            $user=User::find($id);
            $user->name=$request->name;
            $user->student_name=$request->student_name;
            $user->email=$request->email;
            $rst=$user->update();
            if($rst){
                $user=User::find($id);
                $request->session()->put('student_user',$user['student_name']);
                return redirect()->back()->with('message', 'successfully updated');
            }else{
                return redirect()->back()->with('error_message', 'failed to  update');
            }
         }
         return redirect('/welcome');   
    }
    public function changePassword($id){
        if(session()->has('student_user')){
            $user=User::find($id);
            return view('auth.change_password')->with('student_user_data',$user);
         }
         return redirect('/welcome');   
    }
    public function resetPassword(Request $request,$id){
        if(session()->has('student_user')){
            $this->validate($request, [
                'oldpassword' => 'required',
                'newpassword' => 'required|max:191|min:5',
                'confirmpassword' => 'required|same:newpassword'
            ]);
            $shpassword=sha1($request->oldpassword);
            $password=$shpassword;
            $data= DB::select('select * from users where id=? and password=? limit 1',[$id, $password]);
            //print_r($data);
            if(count($data)){
                $user=User::find($id);
                $newpassword=sha1($request->newpassword);
                $user->password=$newpassword;
                $user->update();
                return redirect()->back()->with('message', 'successfully updated');
            }else{
                return redirect()->back()->with('error_message', 'failed to  update');
            }
        
         }
         return redirect('/welcome');  
    }
}
