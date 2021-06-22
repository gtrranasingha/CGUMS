<?php

use App\Http\Controllers\Career_Counsellor_UserController;
use App\Http\Controllers\CGU_Dirctor_UserController;
use App\Http\Controllers\Company_UserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


///////////////////////Student's  Routes///////////////////////////

    //Student's Auth Routes
Route::get('/welcome', function () {
    if(session()->has('student_user')){
        return view('welcome');
    }
   return redirect('/');
});
Route::get('/register', function () {
    return view('auth.student_register');
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
   return view('auth.student_login');
});
Route::get('/welcome/update/{id}',[UserController::class,'updateProfile']);
Route::post('/welcome/update/savedata/{id}',[UserController::class,'edit']);
Route::get('/welcome/update/change_password/{id}',[UserController::class,'changePassword']);
Route::post('/welcome/update/change_password/savedata/{id}',[UserController::class,'resetPassword']);
//////////////////Company's Routes///////////////////////////

    //Company's Auth Routes
Route::get('/company/company_dashbord', function () {
    if(session()->has('company_user')){
        return view('company_dashbord');
    }
   return redirect('/company');

});
Route::get('/company', function () {
    if(session()->has('company_user')){
        return redirect('/company/company_dashbord');
    }
    return view('auth.company_login');
});
Route::get('/company/register', function () {
    return view('auth.company_register');
});
Route::post('/company/register/savedata',[Company_UserController::class,'register']);
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
//////////////////Career Counsellor's Routes///////////////////////////

    //Career Counsellor's Auth Routes
Route::get('/cc', function () {
    if(session()->has('counsellor_user')){
        return redirect('/cc/career_counsellor_dashbord');
    } 
    return view('auth.career_counsellor_login');
});
Route::get('/cc/register', function () {
    return view('auth.career_counsellor_register');
});
Route::post('/cc/register/savedata',[Career_Counsellor_UserController::class,'register']);
Route::post('/cc/getdata',[Career_Counsellor_UserController::class,'login']);

Route::get('/cc/career_counsellor_dashbord', function () {
    if(session()->has('counsellor_user')){
        return view('career_counsellor_dashbord');
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
Route::get('/cc/career_counsellor_dashbord/update/change_password/{id}',[Career_Counsellor_UserController::class,'changePassword']);
Route::post('/cc/career_counsellor_dashbord/update/change_password/savedata/{id}',[Career_Counsellor_UserController::class,'resetPassword']);

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
