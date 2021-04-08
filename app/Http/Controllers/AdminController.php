<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Consultant;
use App\Order;
use App\Product;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()

    {
        $consultants =Consultant::where('status', 0)-> count();
        $products =Product::where('status', 1)-> count();
        $users =User::count();
        $orders =Order::count();
        return view('admin.home',compact('consultants','users','orders','products'));
    }

     public function Logout()
    {
        Auth::logout();
        return redirect()-> route('login.admin');
    }
}
