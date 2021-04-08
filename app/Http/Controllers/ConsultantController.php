<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Consultant;
use App\User;
use App\Blog;
use App\Model\Message;

class ConsultantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:consultant');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $consultants = Consultant::latest()->get();
        $blogs = Blog::where('user_id',Auth::id())->get();
        $users = User::count();
        $messages = Message::count();
        

        return view('consultant.home', compact('consultants','blogs','users','messages'));
    }

    public function inbox()

    {
        try {
            $messageableList  = User::get();
            return view('consultant.inbox',compact('messageableList'));
            //code...
        } catch (\Throwable $th) {
            return $e;
            //throw $th;
        }
     

    }

    public function Logout()
    {
        Auth::logout();
        return redirect()-> route('consultant.login');
    }

    

}

