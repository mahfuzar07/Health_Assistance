<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Blood;
use Carbon\Carbon;


class BloodController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function blood()
       {
        $bloods = Blood::latest()->paginate(6);
        return view('pages.blood',compact('bloods'));
        
     }

     public function userblood()
       {
        
        $users = User::latest()-> get();
        
          return view('pages.userblood',compact('users'));
        
     }


    public function Storeblood(Request $request){

        
        $request-> validate([
           
           'full_name' =>'required|max:255',
           'hospital_name' =>'required|max:255',
           
           'address' =>'required|max:255',
           'phone' =>'required|max:14',
           'blood_group' =>'required',
           'note' =>'required',
          
           ]);

         Blood::insert([

        'full_name'=> $request-> full_name,
        'hospital_name'=> $request-> hospital_name,
        'address'=> $request-> address,
        'phone'=> $request-> phone,
        'blood_group'=> $request-> blood_group,
        'note'=> $request-> note,
        'created_at' => Carbon::now()

        ]);

        return Redirect() -> back();


    }


     public function search(Request $request)
       {
        $search = $request->get('search') ;
        $users = User::where('blood_grp','like','%'.$search.'%')->
        orwhere('name','like','%'.$search.'%')
        // orwhere('address','like','%'.$search.'%')
        -> paginate(6);
        
        return view('pages.userblood',compact('users','search'));
        
     }

}
