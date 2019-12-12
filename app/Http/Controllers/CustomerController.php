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
	
		return view('customer.index')->with('users', $user);
    }
	
	function medicine(Request $request){

        //$users = User::all();
		$medicines = DB::table('medicines')->get(); 
        
        if($request->session()->has('name')){
    		   	return view('customer.medicine')->with('medicines', $medicines);
    	}else{
    		return redirect()->route('login.index');
    	}
    }
}
