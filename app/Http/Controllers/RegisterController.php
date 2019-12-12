<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\users;
use Validator;

class RegisterController extends Controller
{
	public function index(){

		return view('register.index');
	}
	
    function insert(Request $req){

        $validation = Validator::make($req->all(), [
            'username'=>'required',
            'password'=>'required',
			'type'=>'required'
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();
        }

        $users = new users();
        $users->username = $req->username;
        $users->password = $req->password;
        $users->type = $req->type;
        

        if($users->save()){

            $user = new users();
            $user->username = $req->username;
            $user->password = $req->password;
            $user->type = $req->type;
            
				if($user->save()){
					return redirect()->route('login.index');
                }
                else{
                    return redirect()->route('register.index');
                }
        }
        else{
            return redirect()->route('register.index');
        }
    }
}
