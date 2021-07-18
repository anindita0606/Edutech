<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\LoginService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller {


	private $loginService;

	public function __construct(LoginService $loginService) {
		$this->loginService = $loginService;
	}
    


    public function adminLogin() {
    	return view('login');
    }


    public function adminLoginPost(Request $request) {
    	$validated = $request->validate([
        	'email' => 'required|email|max:255',
        	'password' => 'required',
    	]);
		$password = Hash::make($request['password']);
		// echo $password;

    	$loginStatus = $this->loginService->admin_login($request);
    	if($loginStatus === true) {
    		echo "login successfully done.";
    	} else {
    		return redirect()->back()->with('error', 'Invalid Credentials!')->withInput();
    	}
    }
}