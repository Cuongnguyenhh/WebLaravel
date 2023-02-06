<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

use DB;
// use App\Http\Request;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

session_start();

class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }
    public function showAdmin(){
        return view('admin.dashboard');
    
}
public function dashboard(Request $request){
    $admin_email = $request->admin_email;
    $admin_password = md5($request->admin_password);

    $result = DB::table('tbl_admin')->where('email',$admin_email)->where('password',$admin_password)->first();
    if($result){
        Session::put('name',$result->name);
        Session::put('id',$result->id);
        return Redirect::to('/dashboard');
        
    }else{
        Session::put('message','Email or password not found ');
        return Redirect::to('/admin_login');
    }
}
public function logout(){
        Session::flush();
        return Redirect::to('/admin_login')->withInput();
}
    
}
   

