<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use View;
use Session; 


class AdminAddResult extends Controller
{

  public function info()
  {
    $classes = Input::get('classes');
    $section = Input::get('section');
    $year = Input::get('year');
    $message="check";


    $chk=DB::table('table_student_information')
    ->where('Registration','LIKE',$year.'%')
    ->get();

    if (count($chk)>0){




      if (  ($classes=="six"||$classes=="seven")||$classes=="eight") 
      {


        $admin=DB::table('table_student_information')
        ->where('Class','=',Input::get('classes'))
        ->where('Section','=',Input::get('section'))
        ->where('Year','=',Input::get('year'))
        ->get();

        //$data=DB::table('table_student_information')
        
        //->get();
        $data=$admin;
        Session::put('reg',$data); /// for caching

        $message="six to eight";

        if(count($admin)>0)
        {
         // foreach ($admin as $admin) 
          {
           // $father= $admin->Father;
            //$mother= $admin->Mother;
            return view::make('admin-add-result-six-eight')->with('admind',$data); /*for print the table data */

          }
      //  return view::make('admin-add-result-six-eight')->with('message',$message);
        }



        //return view::make('admin-add-result-six-eight')->with('message',$message);
      }
      /*** science****/
      else  if (  ($classes=="nine"||$classes=="ten")&&$section=="science") 
      {


        $admin=DB::table('table_student_information')
        ->where('Class','=',Input::get('classes'))
        ->where('Section','=',Input::get('section'))
        ->where('Year','=',Input::get('year'))
        ->get();

        //$data=DB::table('table_student_information')

        //->get();
        $data=$admin;
        Session::put('reg',$data); /// for caching

        $message="six to eight";

        if(count($admin)>0)
        {
         // foreach ($admin as $admin) 
          {
           // $father= $admin->Father;
            //$mother= $admin->Mother;
            return view::make('admin-add-result-nine-ten-science')->with('admind',$data); /*for print the table data */

          }
      //  return view::make('admin-add-result-six-eight')->with('message',$message);
        }



        //return view::make('admin-add-result-six-eight')->with('message',$message);
      }

      /** business**/
      else  if (  ($classes=="nine"||$classes=="ten")&&$section=="business") 
      {


        $admin=DB::table('table_student_information')
        ->where('Class','=',Input::get('classes'))
        ->where('Section','=',Input::get('section'))
        ->where('Year','=',Input::get('year'))
        ->get();

        //$data=DB::table('table_student_information')

        //->get();
        $data=$admin;
        Session::put('reg',$data); /// for caching

        $message="six to eight";

        if(count($admin)>0)
        {
         // foreach ($admin as $admin) 
          {
           // $father= $admin->Father;
            //$mother= $admin->Mother;
            return view::make('admin-add-result-nine-ten-business')->with('admind',$data); /*for print the table data */

          }
      //  return view::make('admin-add-result-six-eight')->with('message',$message);
        }



        //return view::make('admin-add-result-six-eight')->with('message',$message);
      }
      /***arts***/
      else  if (  ($classes=="nine"||$classes=="ten")&&$section=="huminities") 
      {


        $admin=DB::table('table_student_information')
        ->where('Class','=',Input::get('classes'))
        ->where('Section','=',Input::get('section'))
        ->where('Year','=',Input::get('year'))
        ->get();

        //$data=DB::table('table_student_information')

        //->get();
        $data=$admin;
        Session::put('reg',$data); /// for caching

        $message="six to eight";

        if(count($admin)>0)
        {
         // foreach ($admin as $admin) 
          {
           // $father= $admin->Father;
            //$mother= $admin->Mother;
            return view::make('admin-add-result-nine-ten-arts')->with('admind',$data); /*for print the table data */

          }
      //  return view::make('admin-add-result-six-eight')->with('message',$message);
        }



        //return view::make('admin-add-result-six-eight')->with('message',$message);
      }


      /****/

    }
    else
       return view::make('admin-add-result');

  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $reg_no=Session::get('reg'); //for caching
        foreach ($reg_no as $reg) {   //caching start
             $registration=$reg->Registration;   //regitration using cache
           //  $reg->Student;
              $mark=Input::get($reg->Registration.'mark');  //marks using cache

              $subject=Input::get('subject');

              DB::table('table_student_six_eight')
              ->where('Registration',$registration)
              ->update([
                //'Registration'=>$registration,
                $subject=>$mark]);



        } //cachnig end
        $message="sucessfully added";
        return view::make('admin-add-result')->with('message',$message);
      }


      public function updateScience()
      {
        $reg_no=Session::get('reg'); //for caching
        foreach ($reg_no as $reg) {   //caching start
             $registration=$reg->Registration;   //regitration using cache
           //  $reg->Student;
              $mark=Input::get($reg->Registration.'mark');  //marks using cache

              $subject=Input::get('subject');

              DB::table('table_student_nine_ten_science')
              ->where('Registration',$registration)
              ->update([
                //'Registration'=>$registration,
                $subject=>$mark]);

        } //cachnig end
        $message="sucessfully added";
        return view::make('admin-add-result')->with('message',$message);
      }


      public function updateBusiness()
      {
        $reg_no=Session::get('reg'); //for caching
        foreach ($reg_no as $reg) {   //caching start
             $registration=$reg->Registration;   //regitration using cache
           //  $reg->Student;
              $mark=Input::get($reg->Registration.'mark');  //marks using cache

              $subject=Input::get('subject');

              DB::table('table_student_nine_ten_business')
              ->where('Registration',$registration)
              ->update([
                //'Registration'=>$registration,
                $subject=>$mark]);

        } //cachnig end
        $message="sucessfully added";
        return view::make('admin-add-result')->with('message',$message);
      }


      public function updateArts()
      {
        $reg_no=Session::get('reg'); //for caching
        foreach ($reg_no as $reg) {   //caching start
             $registration=$reg->Registration;   //regitration using cache
           //  $reg->Student;
              $mark=Input::get($reg->Registration.'mark');  //marks using cache

              $subject=Input::get('subject');

              DB::table('table_student_nine_ten_arts')
              ->where('Registration',$registration)
              ->update([
                //'Registration'=>$registration,
                $subject=>$mark]);

            } 
            $message="sucessfully added";
            return view::make('admin-add-result')->with('message',$message);
          }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




    public function registrationCheck()
    {


     $check=DB::table('table_student_information')
     ->where('Registration','=',Input::get('registration'))
     ->get();
     if (count($check)>0) 
     {


       echo  $ID=Input::get('registration');

       $stri = (string)$ID;

       $j = $stri[5];

       $find="";

       if($j=="0" || $j=="9")
       {
        if($stri[7]=="1")
        {
         $find= "NineTenScience";
       }
       else if($stri[7]=="2")
       {
        $find= "NineTenBusinessStudies";
      }
      else if($stri[7]=="3")
      {
        $find= "NineTenHumanity";
      }
    }

    else if(($j=="6"||$j=="7")||$j=="8")
    {
      $find= "SixToEight";
    }

    echo $find;

    if ($find=="SixToEight") {
      $message=$ID;
      return view::make('admin-add-result-registration-six-eight')->with('message',$message);
    }

    else if ($find=="NineTenScience") {
      $message=$ID;
      return view::make('admin-add-result-registration-nine-ten-science')->with('message',$message);
    }


    else if ($find=="NineTenBusinessStudies") {
      $message=$ID;
      return view::make('admin-add-result-registration-nine-ten-business')->with('message',$message);
    }

    else if ($find=="NineTenHumanity") {
      $message=$ID;
      return view::make('admin-add-result-registration-nine-ten-arts')->with('message',$message);
    }

  }

  /*** if close**/
  else{

    $message="check class six to eight";
    return view::make('admin-add-result')->with('message',$message);
  }


}




public function registrationSixToEight()
{

 $registration=Input::get('registration');
 $subject= Input::get('subject');
 $mark=Input::get('mark');

 DB::table('table_student_six_eight')
 ->where('Registration',$registration)
 ->update([$subject=>$mark]);

 $message=$registration;
 $sucess="sucessfull added";
 return view::make('admin-add-result-registration-six-eight')->with('message',$message)
 ->with('sucess',$sucess);

}

public function registrationNineTenScience()
{

 $registration=Input::get('registration');
 $subject= Input::get('subject');
 $mark=Input::get('mark');

 DB::table('table_student_nine_ten_science')
 ->where('Registration',$registration)
 ->update([$subject=>$mark]);

 $message=$registration;
 return view::make('admin-add-result-registration-nine-ten-science')->with('message',$message);

}



public function registrationNineTenBusiness()
{

 $registration=Input::get('registration');
 $subject= Input::get('subject');
 $mark=Input::get('mark');

 DB::table('table_student_nine_ten_business')
 ->where('Registration',$registration)
 ->update([$subject=>$mark]);

 $message=$registration;
 return view::make('admin-add-result-registration-nine-ten-science')->with('message',$message);

}


public function registrationNineTenArts()
{

 $registration=Input::get('registration');
 $subject= Input::get('subject');
 $mark=Input::get('mark');

 DB::table('table_student_nine_ten_arts')
 ->where('Registration',$registration)
 ->update([$subject=>$mark]);

 $message=$registration;
 return view::make('admin-add-result-registration-nine-ten-science')->with('message',$message);

}


}
