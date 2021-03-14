<?php

namespace App\Http\Controllers\Consultant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Consultant;
use Session;
use Image;

class RegistrationController extends Controller
{
	public function regFrom(Request $request)
	{
		try {
			return view('consultant.register');
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}

	public function consultantReg(Request $request)
	{
		try {
			$validate = Validator::make(
				$request->all(),
				[
					'name' => 'required|string|max:255',
					'email' => 'required|string|email|max:255|unique:consultants,email',
					'phone_number' => 'required|digits:11',
					'address' => 'required|max:191',
					'specialist' => 'required',
					'idn' => 'required',
					'reg' => 'required',
					'avatar' => 'required|',
					'password' => 'required|string|min:6|',
				]
			);

			if ($validate->fails()) {
				throw new \Exception($validate->errors()->first(), 1);
			}
               // dd($request->avatar);
			   if ($request->hasFile('avatar')) {
			   if ($request->file('avatar')->isValid()) {
				   $image_name = $request->avatar->getClientOriginalName();
				   $request->avatar->move(public_path('uploads/documents') . '/consultant/', $image_name);
			   }


				$register = new Consultant();
				$register->name = $request->name;
				$register->email = $request->email;
				$register->phone_number = $request->phone_number;
				$register->address = $request->address;
				$register->profession = $request->profession;
				$register->specialist = $request->specialist;
				$register->institute = $request->work_institute;
				$register->idn = $request->idn;
				$register->reg = $request->reg;
				$register->avatar = $image_name;
				$register->password = bcrypt($request['password']);
				// dd($register);
			$register->save();

		}
		Session::flash('message', 'Registration Successfully');
		return back();
		// dd($register);
			return back();
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}
}
