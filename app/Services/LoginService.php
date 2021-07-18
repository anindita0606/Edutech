<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\SuperAdminUser;
use Illuminate\Support\Facades\Hash;


class LoginService {

	public function admin_login(Request $request): bool {
		$data = SuperAdminUser::select('id', 'password')->where('email', $request->email)->first();
		if(empty($data)) {
			return false;
		} else {
			if (Hash::check($request->password, $data->password)) {
	    		return true;
			} else {
				return false;
			}
		}
	}



}