<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index(){
        // Fetch Faculty
        $faculty['data'] =Faculty::orderby("faculties","asc")
        ->select('id','faculties')
         ->get();
         // Load index view
     return view('studentUI.profile_studentform')->with("faculty",$faculty);
    }
    // Fetch records
   public function getDegree($facultiesid=0){

    // Fetch Employees by Departmentid
    $degree['data'] = Degree::orderby("degree","asc")
       ->select('id','degree')
       ->where('faculties',$facultiesid)
       ->get();

    return response()->json($degree);

  }
}
