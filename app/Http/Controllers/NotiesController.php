<?php

namespace App\Http\Controllers;

use App\Models\Noties;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotiesController extends Controller
{
    public function index(){
        if(session()->has('counsellor_user')){
            $noties=DB::table('noties')-> orderBy('created_at','desc') -> get();
            return view('cgu.CGU Notices Table')->with('noties_data',$noties);
         }
         return redirect('/cc'); 
    }
    public function addNoties(){
        if(session()->has('counsellor_user')){
            return view('cgu.CGU Add Notices');
         }
         return redirect('/cc'); 

    }
    public function addNotiesSavedata(Request $request){
        $noties=new Noties();
        $dt = Carbon::now();
        $this->validate($request,[
            'title'=>'required|max:200|min:5',
            'description'=>'required|max:250|min:5',
            'attachment'=>'mimes:jpeg,png,jpg,pdf|max:2048'
            
            ]
        );
        $attachment = $request->attachment;
        if(!empty($attachment)){
                $attachment_name=time().'_'.$attachment->getClientOriginalName();
        }else{
            $attachment_name= $request->attachment;
        }
        
        
        $noties->title= $request->title;
        $noties->note= $request->description;
        $noties->date= $dt->toFormattedDateString();;
        $noties->time =$dt->toTimeString();
        $noties->link1= $request->link1;
        $noties->link2= $request->link2;
        $noties->attachment =$attachment_name;
        $savedate=$noties->save();
                if( $savedate){
                    if(!empty($attachment)){
                        $request->attachment->move('attachment', $attachment_name);
                    }
                   
                    return redirect('/cc/career_counsellor_dashbord/noties');

                }else{
                    return redirect()->back();
                }





    }
    public function viewNoties($id){
        if(session()->has('counsellor_user')){
            $noties=Noties::find($id);
            return view('cgu.CGU View Notice')->with('noties_data',$noties);
         }
         return redirect('/cc'); 

    }
    public function downloadFiles($attachment){
        return response()->download(public_path('attachment/'.$attachment));

    }
    public function editNoties($id){
        if(session()->has('counsellor_user')){
            $noties=Noties::find($id);
            return view('cgu.CGU Edit Notices')->with('noties_data',$noties);
         }
         return redirect('/cc'); 
    }
    public function editNotiesSavedata(Request $request,$id){
        $noties=Noties::find($id);
        $this->validate($request,[
            'title'=>'required|max:200|min:5',
            'description'=>'required|max:250|min:5',
            'attachment'=>'mimes:jpeg,png,jpg,pdf|max:2048'
            
            ]
        );
        $attachment = $request->attachment;
        if(!empty($attachment)){
                $attachment_name=time().'_'.$attachment->getClientOriginalName();
        }else{
            $attachment_name= $request->attachment;
        }
        $noties->title= $request->title;
        $noties->note= $request->description;
        $noties->link1= $request->link1;
        $noties->link2= $request->link2;
        $noties->attachment =$attachment_name;
        $savedate=$noties->save();
                if( $savedate){
                    if(!empty($attachment)){
                        $request->attachment->move('attachment', $attachment_name);
                    }
                   
                    return redirect('/cc/career_counsellor_dashbord/noties');

                }else{
                    return redirect()->back();
                }


    }
    public function deleteNoties($id){
        $noties=Noties::find($id);
        $noties->delete();
        return redirect()->back();
        
    }
    public function showNoties(){
        if(session()->has('student_userId')){

            $noties=DB::table('noties')-> orderBy('created_at','desc') -> get();
            return view('studentUI.Noties')->with('noties_datas',$noties);
            
         }
         return redirect('/welcome');   
    }
}
