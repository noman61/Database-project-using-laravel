<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use View; 

class Adminlogin extends Controller
{

	
	public function login(){
		$admin=DB::table('tableaccount')
		->where('Email','=',Input::get('email'))
		->where('Password','=',Input::get('password'))
		->get();


		$data=DB::table('tableaccount')
		
		->get();



		$message="success";

		if(count($admin)>0)
		{
			foreach ($admin as $admin) 
		{
				$email= $admin->Email;
				$name= $admin->Name;
	return view::make('test-table')->with('admind',$data); //for print the table data 
				# code...
		}
			return view::make('admin-home')->with('message',$message);
		}

		else{
			$message="error";
			return view::make('admin-index')->with('message',$message);
		}



	}
}
