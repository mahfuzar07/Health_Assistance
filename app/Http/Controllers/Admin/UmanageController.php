<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UmanageController extends Controller
{
     public function __construct(){
    
        $this->middleware('auth:admin');
    }

    public function index(){
    	$users = User::latest()-> get();
   	     
   	    return view('admin.umanage',compact('users'));
   }
}
