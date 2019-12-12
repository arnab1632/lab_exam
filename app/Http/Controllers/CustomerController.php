<?php

namespace App\Http\Controllers;
use App\users;
use App\medicines;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index(Request $request){

		$user = DB::table('users')->where('userId', session('user.userId'))
								->get(); 
		
		if($request->session()->has('name')){
			return view('customer.index')->with('users', $user);
		}else{
    		return redirect()->route('login.index');
    	}
    }
	
	function medicine(Request $request){

		$medicines = DB::table('medicines')->get(); 
		
    		return view('customer.medicine')->with('medicines', $medicines);
    	
    }
}
