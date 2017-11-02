<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use View; 

class AdminInformationCollection extends Controller
{



	public function save()
    {

        $check=DB::table('table_student_information')
        ->where('Registration','=',Input::get('registration'))
        ->get();
        if (count($check)>0) {

         $message="This registration number is allrady exis";
         return view::make('admin-information-collection')->with('message',$message);

     }

     
     else{

         DB::table('table_student_information')->insert(['Student'=>Input::get('student'),
          'Father'=>Input::get('father'),
          'Mother'=>Input::get('mother'),
          'Registration'=>Input::get('registration'),
          'Year'=>Input::get('year'),
          'Mobile'=>Input::get('mobile'),
          'Address'=>Input::get('address'),
          'Class'=>$classes=Input::get('classes'),
          'Section'=>$section=Input::get('section'),
          'Gender'=>Input::get('gender'),
          'Birthdate'=>Input::get('birthdate')]);

         if( ($classes=="six"||$classes=="seven")||$classes=="eight")
         {

            DB::table('table_student_six_eight')->insert(['Registration'=>Input::get('registration')]);
        }



        else if( ($classes=="nine"||$classes=="ten" ) && $section=="science")
        {

            DB::table('table_student_nine_ten_science')->insert(['Registration'=>Input::get('registration')]);
        }




        else if( ($classes=="nine"||$classes=="ten" ) && $section=="business")
        {

            DB::table('table_student_nine_ten_business')->insert(['Registration'=>Input::get('registration')]);
        }




        else  if ( ($classes=="nine"||$classes=="ten" ) && $section=="huminities")
        {

            DB::table('table_student_nine_ten_arts')->insert(['Registration'=>Input::get('registration')]);
        }



        $message="Scucessfully submitted";
        return view::make('admin-information-collection')->with('message',$message);
    }

}
}
