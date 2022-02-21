<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Models\dept;
use App\Models\level;
use App\Models\faculty;
class adminController extends Controller

{
    //
    public function  adminProfile(){
        $pageTitle='tmgr | adminprofile';
         $pageName='Admin Profile';
        //  $user= Auth::user();
    	return view('cube/admin_profile',compact('user','pageName','pageTitle'));
    }
    public function index(){
        return view('cube/index');
    }
    // public function DeptLevel(){
        
    //     return view('cube/form_dept_level');
    // }
   

}
