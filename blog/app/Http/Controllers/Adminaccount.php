<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use View; 

class Adminaccount extends Controller
{
    public function save()
    {
    	DB::table('tableaccount')->insert(['Name'=>Input::get('name'),'Email'=>Input::get('email'),'Password'=>Input::get('password'),'Qualification'=>Input::get('qualification')]);
    	
         $message="hello";
        return view::make('admin-account')->with('message',$message);
    }
}
