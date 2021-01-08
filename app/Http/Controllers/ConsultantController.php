<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Consultant;

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
        return view('consultant.home', compact('consultants'));
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()-> route('consultant.login');
    }
}

