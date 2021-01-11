<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Consultant;

class UmanageController extends Controller
{
     public function __construct(){
    
        $this->middleware('auth:admin');
    }

    public function index(){
    	$users = User::latest()-> get();
   	     
   	    return view('admin.umanage',compact('users'));
   }


   public function Delete($user_id){

        User::find($user_id)->delete();
        return Redirect() -> back();
}

public function consultantManage(){
        $consultants = Consultant::latest()-> get();
         
        return view('admin.allconsultant',compact('consultants'));
   }

}
