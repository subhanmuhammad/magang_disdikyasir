<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Session;

class AuthController extends Controller
{
	public function login(){
		return view('auth/login');
	}

	public function post_login(Request $request){
		Validator::make($request->all(), [
			'username' => 'required',
			'password' => 'required',
		])->validate();

		if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
			$user = User::where('username', $request->username)->first();
			Session::put('username', $request->username);
			Session::put('roles', $user->roles);
			if ($user->roles == 'superadmin'){
				return redirect('admin/data_siswa');
			}
			
			
		}
		
		else{
			return back();
		}

	}

	public function logout()
    {
        Auth::logout();
 
        return redirect('/');
    }

	

	

	
}
