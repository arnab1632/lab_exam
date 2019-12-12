<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\medicines;
use Illuminate\Support\Facades\DB;
use Validator;

class AdminController extends Controller
{
    function index(Request $request){

        //$users = User::all();
		$medicines = DB::table('medicines')->get(); 
        
        if($request->session()->has('name')){
    		   	return view('admin.index')->with('medicines', $medicines);
    	}else{
    		return redirect()->route('login.index');
    	}
    }
	
	function customer(){
        $user = DB::table('users')->where('type', 'customer')
					->get(); 
                
        return view('admin.customer')->with('users', $user);
    }
	
	function deletecustomer($id){
        $user = DB::table('users')->where('userId', $id)
								->get(); 
    
        return view('admin.deletecustomer')->with('users', $user);
    }
	
	function destroycustomer($id){
    	users::destroy($id);
    	return redirect()->route('admin.customer');
    }

    function details($id){
        $medicine = DB::table('medicines')->where('id', $id)
					->get(); 
                
        return view('admin.details')->with('medicines', $medicine);
    }


    function edit($id){
        $medicine = DB::table('medicines')->where('id', $id)
        ->get(); 
    
        return view('admin.edit')->with('medicines', $medicine);
    }
	
	function update(Request $req, $id){
        $validation = Validator::make($req->all(), [
            'vendorname'=>'required',
            'price'=>'required',
            'availability'=>'required',
			'type'=>'required',
			'category'=>'required'
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();
        }

    	$medicines = medicines::find($id);
        $medicines->vendorname = $req->vendorname;
        $medicines->price = $req->price;
        $medicines->availability = $req->availability;
        $medicines->type = $req->type;
		$medicines->category = $req->category;
        $medicines->save();
        
        return redirect()->route('admin.index');
    }
	
    function delete($id){
        $medicine = DB::table('medicines')->where('id', $id)
									       ->get(); 
    
        return view('admin.delete')->with('medicines', $medicine);
    }

    function destroy($id){
    	medicines::destroy($id);
    	return redirect()->route('admin.index');
    }

    function addmedicine(){

        return view('admin.addmedicine');
    }

    function insert(Request $req){

        $validation = Validator::make($req->all(), [
            'vendorname'=>'required',
            'price'=>'required',
            'availability'=>'required',
			'type'=>'required',
			'category'=>'required'
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();
        }

        $medicines = new medicines();
        $medicines->vendorname = $req->vendorname;
        $medicines->price = $req->price;
        $medicines->availability = $req->availability;
        $medicines->type = $req->type;
		$medicines->category = $req->category;
		$medicines->save();

        

            if($medicines->save()){
                return redirect()->route('admin.index');
                }
                else{
                    return redirect()->route('admin.addmedicine');
                }
        
    }
}
