<?php

namespace App\Http\Controllers;

use App\Models\CGU_Director_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class CGU_Dirctor_UserController extends Controller
{
    public function register(Request $request){
        $dir_user=new CGU_Director_user();
        //dd($request->all());
        $this->validate($request,[
            'name'=>'required|max:20|min:5|unique:c_g_u__director_users',
            'password'=>'required|max:191|min:3',
            'nic'=>'required|max:12|min:9|unique:c_g_u__director_users',
            'dir_name'=>'required|unique:c_g_u__director_users|max:191|min:3',
            ]
        );
           
                    $dir_user->name=$request->name;
                    $dir_user->dir_name=$request->dir_name;
                    $dir_user->nic=$request->nic;
                    $shpassword=sha1($request->password);
                    $dir_user->password=$shpassword;
                    $dir_user->save();
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

    $data= DB::select('select * from  c_g_u__director_users where name=? and password=? limit 1',[$name, $password]);
    // print_r($data);
    if(count($data)){
    $id=DB::table('c_g_u__director_users')->where('name',$name)->value('id');
    $user=CGU_Director_user::find($id);
    //$path=$request->input();
     $request->session()->put('username',$user['dir_name']);
     $request->session()->put('userId',$id);
     return redirect('/admin/cgu_director_dashbord');
    }
    else{
     return redirect()->back()->with('message', 'Account is Incorrect!');
    }
}
public function updateProfile($id){
    
    
     if(session()->has('username')){
        $user=CGU_Director_user::find($id);
        return view('auth.cgu_director_update')->with('data',$user);
     }
     return redirect('/admin');    
}
public function edit(Request $request,$id){

    $this->validate($request,[
        'name'=>'required|max:20|min:5',
        'nic'=>'required|max:12|min:9',
        'dir_name'=>'required|max:191|min:3',
        ]
    );
    $user=CGU_Director_user::find($id);
    $name=$request->name;
    $nic=$request->nic;
    $dir_name=$request->dir_name;
    //dd($user->all());
    $user->name=$name;
    $user->nic=$nic;
    $user->dir_name=$dir_name;
    $message = $user->update();
        if ($message) {
            $user=CGU_Director_user::find($id);
            $request->session()->put('username',$user['dir_name']);
            return redirect()->back()->with('message', 'successfully updated');
        } else {
            return redirect()->back()->with('message', 'failed to  update');
        }
    
}
public function changePassword($id){
    if(session()->has('username')){
        $user=CGU_Director_user::find($id);
        return view('auth.cgu_director_change_password')->with('data',$user);
    }
     return redirect('/admin');    
}
public function resetPassword(Request $request,$id){
    //dd($request->all());
    $this->validate($request, [
        'oldpassword' => 'required',
        'newpassword' => 'required|max:191|min:3',
        'confirmpassword' => 'required|same:newpassword'
    ]);
    $shpassword=sha1($request->oldpassword);
    $password=$shpassword;
    $data= DB::select('select * from  c_g_u__director_users where id=? and password=? limit 1',[$id, $password]);
    //print_r($data);
    if(count($data)){
        $user=CGU_Director_user::find($id);
        $newpassword=sha1($request->newpassword);
        $user->password=$newpassword;
        $user->update();
        return redirect()->back()->with('message', 'successfully updated');
    }else{
        return redirect()->back()->with('error_message', 'failed to  update');
    }

}
}
