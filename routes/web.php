<?php

use App\Http\Controllers\Career_Counsellor_UserController;
use App\Http\Controllers\CGU_Dirctor_UserController;
use App\Http\Controllers\Company_Controller;
use App\Http\Controllers\Company_UserController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\Job_Vacancy_Controller;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NotiesController;
use App\Http\Controllers\Programme_Controller;
use App\Http\Controllers\Session_Controller;
use App\Http\Controllers\Student_Controller;
use App\Http\Controllers\UserController;
use App\Models\Career_Counsellor_user;
use App\Models\Comapany_user;
use App\Models\Programme;
use App\Models\Session;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


///////////////////////Student's  Routes///////////////////////////

Route::post('/request_register/sendemail',[MailController::class,'sendEmail']);
Route::get('/request_register',function(){
    return view('auth.student_register_request');
});
Route::get('/request_register/sendemail/confirm',function(){
    return view('auth.student_register_request_confirmbox');
});
Route::get('/request_register/sendemail/confirm/error',function(){
    return view('auth.student_register_request_error');
});
Route::get('/request_register/sendemail/confirm/savenumber/send',function(){
    return view('auth.student_register_request_send');
});
Route::post('/request_register/sendemail/confirm/savenumber',[MailController::class,'confirmEmail']);
    //Student's Auth Routes
Route::get('/welcome', function () {
    if(session()->has('student_user')){
        $session_count =count(DB::select('select id from sessions  where St_id=?',[session('student_id')]));
        $job_count =count(DB::select('select id from  job__vacancies'));
        $programme_count =count(DB::select('select id from programmes'));
        $applyjob_count =count(DB::select('select id from   apply_jobs  where st_uid =?',[session('student_id')]));
        $applyjobs_data= DB::select('select * from  apply_jobs  where st_uid =?',[session('student_id')]);
        $programmes_data= DB::select('SELECT * from  enrollments  LEFT JOIN programmes ON  programmes.id=enrollments.P_id WHERE enrollments.St_id=?',[session('student_id')]);
        return view('studentUI.student_dashbord',['sessionCounts'=> $session_count,'jobCounts'=>$job_count,'proCounts'=>$programme_count,
        'applyjob'=>$applyjob_count,'jobs'=>$applyjobs_data,'programmes'=>$programmes_data]);
    }
   return redirect('/loginpage');
});
Route::get('/request_register/sendemail/confirm/savenumbe/register', function () {
    if(session()->has('code')){
        session()->pull('code');
        return view('auth.student_register');
    }
    return redirect('/');
});
Route::post('/register/savedata',[UserController::class,'register']);
Route::post('/login/getdata',[UserController::class,'login']);
Route::get('/logout', function () {
    if(session()->has('student_user')){
        session()->pull('student_user');
    }
   return redirect('/');
});
Route::get('/', function () {
    if(session()->has('student_user')){
        return redirect('/welcome');
    }
  return view('studentUI.home');
 
});

Route::get('/loginpage', function () {
    if(session()->has('student_user')){
        return redirect('/welcome');
    }
  return view('auth.student_login');
 
});

Route::get('/registerpage', function () {
    if(session()->has('student_user')){
        return redirect('/welcome');
    }
  return view('auth.student_register_request');
 
});

Route::get('/welcome/update/{id}',[UserController::class,'updateProfile']);
Route::post('/welcome/update/savedata/{id}',[UserController::class,'edit']);
Route::get('/welcome/change_password/{id}',[UserController::class,'changePassword']);
Route::post('/welcome/change_password/savedata/{id}',[UserController::class,'resetPassword']);
////////////////////////DropdownList/////////////
Route::get('/request_register/sendemail/confirm/savenumbe/register/profile', [FacultyController::class, 'index']);
Route::get('/request_register/sendemail/confirm/savenumbe/register/profile/getDegree/{id}', [FacultyController::class, 'getDegree']);
/////////////////////////////////////////////////////////////////////
Route::post('/request_register/sendemail/confirm/savenumbe/register/profile/savedata', [Student_Controller::class, 'register'])->name('profiledata');
Route::get('/welcome/profile', [Student_Controller::class, 'index']);
Route::get('/welcome/programmes', [Programme_Controller::class, 'showProgrammes']);
Route::get('/welcome/programmes/enroll/{id}', [Programme_Controller::class, 'enroll']);
Route::get('/welcome/programmes/enroll/cancle/{id}', [Programme_Controller::class, 'cancel']);
Route::get('/welcome/noties', [NotiesController::class, 'showNoties']);
Route::get('/welcome/noties/{attachment}',[NotiesController::class,'downloadFiles']);
Route::post('/welcome/profile/savedata/{id}', [Student_Controller::class, 'editProfile']);
Route::get('/welcome/job_vacancies', [Job_Vacancy_Controller::class, 'index']);
Route::get('/welcome/job_vacancies/apply/{id}', [Job_Vacancy_Controller::class,'apply']);
Route::get('/welcome/job_vacancies/apply/request/{id}', [Job_Vacancy_Controller::class,'request']);
Route::get('/welcome/sessions/cc_session', [Session_Controller::class,'index']);
Route::post('/welcome/sessions/cc_session/savedata', [Session_Controller::class,'getAppoinment']);
Route::get('/welcome/sessions/mock_interviews', [Session_Controller::class,'mockIndex']);
Route::post('/welcome/sessions/mock_interviews/savedata', [Session_Controller::class,'getMock']);
//////////////////Company's Routes///////////////////////////

    //Company's Auth Routes
Route::get('/company/company_dashbord', function () {
    if(session()->has('company_user')){
        $jv_count =count(DB::select('select id from  job__vacancies  where comp_name =?',[session('company_user')]));
        $applyjob_count =count(DB::select('select id from  apply_jobs  where comp_name =?',[session('company_user')]));
        $confirmjob_count =count(DB::select('select id from  apply_jobs  where comp_name =? and confirmed =?',[session('company_user'),1]));
        $allapplyjob_count =count(DB::select('select * from  apply_jobs  where comp_name =?',[session('company_user')]));
       $allpendingapplyjob_count =count(DB::select('select id from  apply_jobs  where comp_name =? and confirmed=?',[session('company_user'),0]));
        return view('compantUI.company_dashbord',['jvCounts'=> $jv_count,'ajCounts'=>$applyjob_count,'selectjobCounts'=>$confirmjob_count ,
        'alljobs'=>$allapplyjob_count,'newcomer'=> $allpendingapplyjob_count]);
    }
   return redirect('/company');

});
Route::get('/company', function () {
    if(session()->has('company_user')){
        return redirect('/company/company_dashbord');
    }
    return view('auth.company_login');
});
Route::post('/company/getdata',[Company_UserController::class,'login']);
Route::get('/company/logout', function () {
    if(session()->has('company_user')){
        session()->pull('company_user');
    }
   return redirect('/company');
});
Route::get('/company/company_dashbord/update/{id}',[Company_UserController::class,'updateProfile']);
Route::post('/company/company_dashbord/update/savedata/{id}',[Company_UserController::class,'edit']);
Route::get('/company/company_dashbord/update/change_password/{id}',[Company_UserController::class,'changePassword']);
Route::post('/company/company_dashbord/update/change_password/savedata/{id}',[Company_UserController::class,'resetPassword']);
///////////////////////////////////////////////////////////////////////////////
Route::get('/company/company_dashbord/add_vacancies', function () {
    if(session()->has('company_user')){
        return view('compantUI.add_vacancies');
    }
   return redirect('/company');

});
Route::post('/company/company_dashbord/add_vacancies/createjob',[Job_Vacancy_Controller::class,'register']);
Route::get('/company/company_dashbord/View_applications',[Job_Vacancy_Controller::class,'viewapplication']);
Route::get('/company/company_dashbord/View_applications/downlode_cv/{st_cv}',[Job_Vacancy_Controller::class,'downloadeCv']);
Route::get('/company/company_dashbord/profile_registration',[Company_Controller::class,'index']);
Route::get('/company/company_dashbord/profile_view',[Company_Controller::class,'showProfile']);
Route::get('/company/company_dashbord/profile_view/view_jobsVacancis',[Job_Vacancy_Controller::class,'showVacancy']);
Route::get('/company/company_dashbord/profile_view/view_jobsVacancis/view/{id}',[Job_Vacancy_Controller::class,'viewVacancy']);
Route::get('/company/company_dashbord/profile_view/view_jobsVacancis/view/edit/{id}',[Job_Vacancy_Controller::class,'editVacancy']);
Route::get('/company/company_dashbord/profile_view/view_jobsVacancis/view/delete/{id}',[Job_Vacancy_Controller::class,'deleteVacancy']);
Route::post('/company/company_dashbord/profile_view/view_jobsVacancis/view/edit/save/{id}',[Job_Vacancy_Controller::class,'saveEditVacancy']);
Route::post('/company/company_dashbord/profile_registration/savedata',[Company_Controller::class,'registerProfile']);
Route::post('/company/company_dashbord/profile_registration/editdata/{id}',[Company_Controller::class,'editeProfile']);
Route::get('/company/company_dashbord/View_applications/accept_job/{id}',[Company_Controller::class,'accept']);
Route::post('/company/company_dashbord/View_applications/accept_job/sendmail/{id}',[Company_Controller::class,'sendMail']);
Route::get('/company/company_dashbord/View_applications/pending_job/{id}',[Company_Controller::class,'pending']);

//////////////////Career Counsellor's Routes///////////////////////////

    //Career Counsellor's Auth Routes
Route::get('/cc', function () {
    if(session()->has('counsellor_user')){
        return redirect('/cc/career_counsellor_dashbord');
    } 
    return view('auth.CGU Counsellor login');
});
Route::get('/cc/register', function () {
    return view('auth.career_counsellor_register');
});
Route::post('/cc/register/savedata',[Career_Counsellor_UserController::class,'register']);
Route::post('/cc/getdata',[Career_Counsellor_UserController::class,'login']);

Route::get('/cc/career_counsellor_dashbord', function () {
    if(session()->has('counsellor_user')){
        $comp_count =(int)(Comapany_user::all()->count());
        $prog_count =(int)(Programme::all()->count());
        $all_session =(int)(Session::all()->count());
        $all_student =(int)(User::all()->count());
        $all_cgu =(int)(Career_Counsellor_user::all()->count());
        $ccsession_count =count(DB::select('select id from sessions  where s_type =?',['Career Counselling Session']));
        //$ccsession_count =count(DB::select('select s_no from sessions  where s_type =?',['Career Counselling Session']));
        return view('cgu.CGU Dashboard',['comp_count'=> $comp_count,'prog_count'=>$prog_count,
        'all_session'=> $all_session,'ccsession_count'=>$ccsession_count,'all_student'=>$all_student,
            'all_student'=>$all_student,'all_cgu'=>$all_cgu]);
    }
   return redirect('/cc');

});
Route::get('/cc/logout', function () {
    if(session()->has('counsellor_user')){
        session()->pull('counsellor_user');
    }
   return redirect('/cc');
});
Route::get('/cc/career_counsellor_dashbord/update/{id}',[Career_Counsellor_UserController::class,'updateProfile']);
Route::post('/cc/career_counsellor_dashbord/update/savedata/{id}',[Career_Counsellor_UserController::class,'edit']);
Route::get('/cc/career_counsellor_dashbord/change_password/{id}',[Career_Counsellor_UserController::class,'changePassword']);
Route::post('/cc/career_counsellor_dashbord/change_password/savedata/{id}',[Career_Counsellor_UserController::class,'resetPassword']);
Route::get('/cc/career_counsellor_dashbord/company/register', function () {
    if(session()->has('counsellor_user')){
            return view('cgu.CGU Company User Registration');
    }
            return redirect('/cc');
});
Route::post('/cc/career_counsellor_dashbord/company/register/savedata',[Company_UserController::class,'register']);
Route::get('/cc/career_counsellor_dashbord/company/view',[Company_UserController::class,'viewCompanies']);
Route::get('/cc/career_counsellor_dashbord/company/view/deactive/{id}',[Company_UserController::class,'deactive']);
Route::get('/cc/career_counsellor_dashbord/company/view/active/{id}',[Company_UserController::class,'active']);
        /////////////////////////////////Noties////////////////////////////////
Route::get('/cc/career_counsellor_dashbord/noties',[NotiesController::class,'index']);
Route::get('/cc/career_counsellor_dashbord/noties/show/{id}',[NotiesController::class,'viewNoties']);
Route::get('/cc/career_counsellor_dashbord/noties/delete/{id}',[NotiesController::class,'deleteNoties']);
Route::get('/cc/career_counsellor_dashbord/noties/view/{attachment}',[NotiesController::class,'downloadFiles']);
Route::get('/cc/career_counsellor_dashbord/noties/addnew',[NotiesController::class,'addNoties']);  
Route::post('/cc/career_counsellor_dashbord/noties/addnew/save',[NotiesController::class,'addNotiesSavedata']);            
Route::get('/cc/career_counsellor_dashbord/noties/edit/{id}',[NotiesController::class,'editNoties']);
Route::post('/cc/career_counsellor_dashbord/noties/edit/{id}/save',[NotiesController::class,'editNotiesSavedata']); 
          /////////////////////////////////Programme////////////////////////////////
Route::get('/cc/career_counsellor_dashbord/programme',[Programme_Controller::class,'index']);
Route::get('/cc/career_counsellor_dashbord/programme/show/{id}',[Programme_Controller::class,'viewProgramme']);
Route::get('/cc/career_counsellor_dashbord/programme/delete/{id}',[Programme_Controller::class,'removeProgramme']);
Route::get('/cc/career_counsellor_dashbord/programme/enrollment/{id}',[Programme_Controller::class,'enrollProgramme']);
Route::get('/cc/career_counsellor_dashbord/programme/edit/{id}',[Programme_Controller::class,'editProgramme']);
Route::post('/cc/career_counsellor_dashbord/programme/edit/savedata/{id}',[Programme_Controller::class,'editProgrammeSavedata']);
Route::get('/cc/career_counsellor_dashbord/programme/addnew',[Programme_Controller::class,'addProgramme']);
Route::post('/cc/career_counsellor_dashbord/programme/addnew/savedata',[Programme_Controller::class,'addProgrammeSavedata']);

Route::get('/cc/career_counsellor_dashbord/session/Career Counselling Session',[Session_Controller::class,'showCcsession']);
Route::get('/cc/career_counsellor_dashbord/session/Career Counselling Session/select/{id}',[Session_Controller::class,'selectSession']);
Route::get('/cc/career_counsellor_dashbord/session/Career Counselling Session/remove/{id}',[Session_Controller::class,'RemoveSession']);
Route::get('/cc/career_counsellor_dashbord/session/Mock interview',[Session_Controller::class,'showMockinterview']);

Route::get('/cc/career_counsellor_dashbord/job_vacancies', [Job_Vacancy_Controller::class, 'cguShowVacancy']);
Route::get('/cc/career_counsellor_dashbord/job_vacancies/view/{id}', [Job_Vacancy_Controller::class,'cguViewJob']);
Route::get('/cc/career_counsellor_dashbord/job_vacancies/view/remove/{id}', [Job_Vacancy_Controller::class,'cguRemoveJob']);




//////////////////CGU Director's Routes ///////////////////////////

    //CGU Director's Auth Routes
Route::get('/admin', function () {
    if(session()->has('username')){
        return redirect('/admin/cgu_director_dashbord');
    } 
    return view('auth.cgu_director_login');
});
Route::get('/admin/register', function () {
    return view('auth.cgu_director_register');
});
Route::post('/admin/register/savedata',[CGU_Dirctor_UserController::class,'register']);
Route::post('/admin/getdata',[CGU_Dirctor_UserController::class,'login']);

Route::get('/admin/cgu_director_dashbord', function () {
    if(session()->has('username')){
        return view('cgu_director_dashbord');
    }
   return redirect('/admin');

});
Route::get('/admin/logout', function () {
    if(session()->has('username')){
        session()->pull('username');
    }
   return redirect('/admin');
});
Route::get('/admin/cgu_director_dashbord/update/{id}',[CGU_Dirctor_UserController::class,'updateProfile']);
Route::post('/admin/cgu_director_dashbord/update/savedata/{id}',[CGU_Dirctor_UserController::class,'edit']);
Route::get('/admin/cgu_director_dashbord/update/change_password/{id}',[CGU_Dirctor_UserController::class,'changePassword']);
Route::post('/admin/cgu_director_dashbord/update/change_password/savedata/{id}',[CGU_Dirctor_UserController::class,'resetPassword']);
