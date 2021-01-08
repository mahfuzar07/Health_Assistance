<?php

namespace App\Http\Controllers\Consultant;

use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Session;

class LoginController extends Controller
{
	public function loginFrom()
	{
		try {
			return view('consultant.login');
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}

	public function constantLogin(Request $request)
	{
		$rules = array(
			'email'    => 'required|',
			'password' => 'required|',
		);

		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			echo "Error";
			return Redirect::to('/consultant/login')
				->withErrors($validator) //
				->withInput($request->all());
		} else {
			$responsedata = array(
				'email'     => $request->email,
				'password'  => $request->password
			);

			if (Auth::guard('consultant')->attempt($responsedata)) {

				return Redirect(route('consultant-home'));
			} else {
				Session::flash('message', 'Email OR Password not matched');
				return Redirect::to('consultant/login');
			}
		}
	}

	public function  logout()
	{
		Auth::guard('consultant')->logout();
		session_destory();
		return redirect()->route('consultant.login');
	}
}
