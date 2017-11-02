<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use View;
use Session; 


class AdminViewResult extends Controller
{



	public function __construct()
	{
		$this->beforeFilter(function()
		{
            //
		});
	}
	public function beforeFilter()
	{
		/****** block for populated the data six to eight table ******/
		$this->sixEightResult();
		$this->nineTenScienceResult();
		$this->nineTenBusinessResult();
		$this->nineTenArtsResult();

	}

	public function sixEightResult(){
		{




			$dataSE=DB::table('table_student_six_eight')
			->get();

			foreach ($dataSE as $dataSE ){ 
				

				$registration =$dataSE->Registration;
				$banglaFirst=$dataSE->BanglaFirst;
				$banglaSecond=$dataSE->BanglaSecond;
				$englishFirst=$dataSE->EnglishFirst;
				$englishSecond=$dataSE->EnglishSecond;
				$math=$dataSE->Math;
				$religion=$dataSE->Religion;
				$generalScience=$dataSE->GeneralScience;
				$bangladeshAndWorld=$dataSE->BangladeshAndWorld;
				$iict=$dataSE->ICT;
				$agriculture=$dataSE->Agriculture;
				$workAndEducation=$dataSE->WorkAndEducation;
				$physicalEducation=$dataSE->PhysicalEducation;
				$fineArts=$dataSE->FineArts;
				/**total marks**/
				{
					$totalMarks=$banglaFirst+$banglaSecond+$englishFirst+$englishSecond+$math+$religion
					+$generalScience+$bangladeshAndWorld+$iict
					+$agriculture+$workAndEducation
					+$physicalEducation+$fineArts;
				}
				/**grade number of pass**/
				{
					//return $this->sendRequest($uri);
					$point=0.0;
					$pass=0;

                    //****/
					$p = $this->pointCalculation($banglaFirst);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($banglaSecond);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($englishFirst);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($englishSecond);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($math);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($religion);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($generalScience);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($bangladeshAndWorld);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($iict);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($agriculture);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($workAndEducation);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($physicalEducation);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($fineArts);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   


				}
				$fail=13-$pass;
				$status="Fail";
				if($fail>0)
				{
					$grade="F";
					$point=0.0;
					$status="Fail";
				}
				else
				{
					$point= $point/13;
					$status="Pass";

					if ($point>=5) 
						$grade="A+";
					else if ($point<5&&$point>=4) 
						$grade="A";

					else if ($point<4&&$point>=3.5) 
						$grade="A-";
					
					else if ($point<3.5&&$point>=3) 
						$grade="B";
					else if ($point<3&&$point>=2) 
						$grade="C";
					else
						$grade="D";

				}
				

				$ck=DB::table('table_result')
				->where('Registration','=',$registration)
				->get();
				
				if (count($ck)>0) {

					DB::table('table_result')
					->where('Registration',$registration)
					->update([
						'Registration'=>$registration,
						'TotalMarks'=>$totalMarks,
						'Status'=>$status,
						'Grade'=>$grade,
						'Point'=>$point,
						'NumberOfPass'=>$pass,
						'NumberOfFail'=>$fail,
						]);
				}
				else
				{

					/*add to db*/
					DB::table('table_result')->insert([
						'Registration'=>$registration,
						'TotalMarks'=>$totalMarks,
						'Status'=>$status,
						'Grade'=>$grade,
						'Point'=>$point,
						'NumberOfPass'=>$pass,
						'NumberOfFail'=>$fail,
						]);
				}

			}

		}
		return 0;

	}


	public function nineTenScienceResult(){
		{



			$dataSE=DB::table('table_student_nine_ten_science')
			->get();

			foreach ($dataSE as $dataSE ){ 
				

				$registration =$dataSE->Registration;
				$banglaFirst=$dataSE->BanglaFirst;
				$banglaSecond=$dataSE->BanglaSecond;
				$englishFirst=$dataSE->EnglishFirst;
				$englishSecond=$dataSE->EnglishSecond;
				$math=$dataSE->Math;
				$religion=$dataSE->Religion;
				$socialScience=$dataSE->SocialScience;
				$informationAndCommunication=$dataSE->InformationAndCommunication;
				$physicalEducation=$dataSE->PhysicalEducation;
				$physics=$dataSE->Physics;
				$chemistry=$dataSE->Chemistry;
				$biology=$dataSE->Biology;
				$higherMath=$dataSE->HigherMath;
				/**total marks**/
				{
					$totalMarks=$banglaFirst+$banglaSecond
					+$englishFirst+$englishSecond+$math
					+$religion+$socialScience
					+$informationAndCommunication
					+$physicalEducation
					+$physics+$chemistry
					+$biology+$higherMath;
				}
				/**grade number of pass**/
				{
					//return $this->sendRequest($uri);
					$point=0.0;
					$pass=0;

                    //****/
					$p = $this->pointCalculation($banglaFirst);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($banglaSecond);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($englishFirst);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($englishSecond);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($math);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($religion);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($socialScience);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($informationAndCommunication);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($physicalEducation);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($physics);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($chemistry);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($biology);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($higherMath);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   


				}
				$fail=13-$pass;
				$status="Fail";
				if($fail>0)
				{
					$grade="F";
					$point=0.0;
					$status="Fail";
				}
				else
				{
					$point= $point/13;
					$status="Pass";

					if ($point>=5) 
						$grade="A+";
					else if ($point<5&&$point>=4) 
						$grade="A";

					else if ($point<4&&$point>=3.5) 
						$grade="A-";
					
					else if ($point<3.5&&$point>=3) 
						$grade="B";
					else if ($point<3&&$point>=2) 
						$grade="C";
					else
						$grade="D";

				}
				

				$ck=DB::table('table_result')
				->where('Registration','=',$registration)
				->get();
				
				if (count($ck)>0) {

					DB::table('table_result')
					->where('Registration',$registration)
					->update([
						'Registration'=>$registration,
						'TotalMarks'=>$totalMarks,
						'Status'=>$status,
						'Grade'=>$grade,
						'Point'=>$point,
						'NumberOfPass'=>$pass,
						'NumberOfFail'=>$fail,
						]);
				}
				else
				{

					/*add to db*/
					DB::table('table_result')->insert([
						'Registration'=>$registration,
						'TotalMarks'=>$totalMarks,
						'Status'=>$status,
						'Grade'=>$grade,
						'Point'=>$point,
						'NumberOfPass'=>$pass,
						'NumberOfFail'=>$fail,
						]);
				}

			}


		}
		return 0;

	}





	public function nineTenBusinessResult(){
		{



			$dataSE=DB::table('table_student_nine_ten_business')
			->get();

			foreach ($dataSE as $dataSE ){ 
				

				$registration =$dataSE->Registration;

				$banglaFirst=$dataSE->BanglaFirst;

				$banglaSecond=$dataSE->BanglaSecond;

				$englishFirst=$dataSE->EnglishFirst;

				$englishSecond=$dataSE->EnglishSecond;

				$math=$dataSE->Math;

				$religion=$dataSE->Religion;

				$generalScience=$dataSE->GeneralScience;

				$informationAndCommunication=$dataSE->InformationAndCommunication;

				$physicalEducation=$dataSE->PhysicalEducation;

				$accounting=$dataSE->Accounting;

				$businessContact=$dataSE->BusinessContact;

				$commercialGeography=$dataSE->CommercialGeography;

				$agriculture=$dataSE->Agriculture;
				/**total marks**/
				{
					$totalMarks=$banglaFirst+$banglaSecond
					+$englishFirst+$englishSecond+$math
					+$religion+$generalScience
					+$informationAndCommunication
					+$physicalEducation
					+$accounting+$businessContact
					+$commercialGeography+$agriculture;
				}
				/**grade number of pass**/
				{
					//return $this->sendRequest($uri);
					$point=0.0;
					$pass=0;

                    //****/
					$p = $this->pointCalculation($banglaFirst);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($banglaSecond);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($englishFirst);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($englishSecond);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($math);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($religion);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($generalScience);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($informationAndCommunication);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($physicalEducation);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($accounting);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($businessContact);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($commercialGeography);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($agriculture);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   


				}
				$fail=13-$pass;
				$status="Fail";
				if($fail>0)
				{
					$grade="F";
					$point=0.0;
					$status="Fail";
				}
				else
				{
					$point= $point/13;
					$status="Pass";

					if ($point>=5) 
						$grade="A+";
					else if ($point<5&&$point>=4) 
						$grade="A";

					else if ($point<4&&$point>=3.5) 
						$grade="A-";
					
					else if ($point<3.5&&$point>=3) 
						$grade="B";
					else if ($point<3&&$point>=2) 
						$grade="C";
					else
						$grade="D";

				}
				

				$ck=DB::table('table_result')
				->where('Registration','=',$registration)
				->get();
				
				if (count($ck)>0) {

					DB::table('table_result')
					->where('Registration',$registration)
					->update([
						'Registration'=>$registration,
						'TotalMarks'=>$totalMarks,
						'Status'=>$status,
						'Grade'=>$grade,
						'Point'=>$point,
						'NumberOfPass'=>$pass,
						'NumberOfFail'=>$fail,
						]);
				}
				else
				{

					/*add to db*/
					DB::table('table_result')->insert([
						'Registration'=>$registration,
						'TotalMarks'=>$totalMarks,
						'Status'=>$status,
						'Grade'=>$grade,
						'Point'=>$point,
						'NumberOfPass'=>$pass,
						'NumberOfFail'=>$fail,
						]);
				}

			}


		}
		return 0;

	}



	public function nineTenArtsResult(){
		{



			$dataSE=DB::table('table_student_nine_ten_arts')
			->get();

			foreach ($dataSE as $dataSE ){ 
				

				$registration =$dataSE->Registration;

				$banglaFirst=$dataSE->BanglaFirst;

				$banglaSecond=$dataSE->BanglaSecond;

				$englishFirst=$dataSE->EnglishFirst;

				$englishSecond=$dataSE->EnglishSecond;

				$math=$dataSE->Math;

				$religion=$dataSE->Religion;

				$generalScience=$dataSE->GeneralScience;

				$informationAndCommunication=$dataSE->InformationAndCommunication;

				$physicalEducation=$dataSE->PhysicalEducation;

				$economics=$dataSE->Economics;

				$civics=$dataSE->Civics;

				$geograpgy=$dataSE->Geograpgy;

				$history=$dataSE->History;
				/**total marks**/
				{
					$totalMarks=$banglaFirst+$banglaSecond
					+$englishFirst+$englishSecond+$math
					+$religion+$generalScience
					+$informationAndCommunication
					+$physicalEducation
					+$economics+$civics
					+$geograpgy+$history;
				}
				/**grade number of pass**/
				{
					//return $this->sendRequest($uri);
					$point=0.0;
					$pass=0;

                    //****/
					$p = $this->pointCalculation($banglaFirst);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($banglaSecond);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($englishFirst);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($englishSecond);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($math);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/
                    //****/
					$p = $this->pointCalculation($religion);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($generalScience);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($informationAndCommunication);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($physicalEducation);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($economics);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($civics);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($geograpgy);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   

					$p = $this->pointCalculation($history);
					if($p>0)
					{
						$pass=$pass+1;
						$point=$point+$p;
					} 
					/*******/   


				}
				$fail=13-$pass;
				$status="Fail";
				if($fail>0)
				{
					$grade="F";
					$point=0.0;
					$status="Fail";
				}
				else
				{
					$point= $point/13;
					$status="Pass";

					if ($point>=5) 
						$grade="A+";
					else if ($point<5&&$point>=4) 
						$grade="A";

					else if ($point<4&&$point>=3.5) 
						$grade="A-";
					
					else if ($point<3.5&&$point>=3) 
						$grade="B";
					else if ($point<3&&$point>=2) 
						$grade="C";
					else
						$grade="D";

				}
				

				$ck=DB::table('table_result')
				->where('Registration','=',$registration)
				->get();
				
				if (count($ck)>0) {

					DB::table('table_result')
					->where('Registration',$registration)
					->update([
						'Registration'=>$registration,
						'TotalMarks'=>$totalMarks,
						'Status'=>$status,
						'Grade'=>$grade,
						'Point'=>$point,
						'NumberOfPass'=>$pass,
						'NumberOfFail'=>$fail,
						]);
				}
				else
				{

					/*add to db*/
					DB::table('table_result')->insert([
						'Registration'=>$registration,
						'TotalMarks'=>$totalMarks,
						'Status'=>$status,
						'Grade'=>$grade,
						'Point'=>$point,
						'NumberOfPass'=>$pass,
						'NumberOfFail'=>$fail,
						]);
				}

			}


		}
		return 0;

	}





	public function pointCalculation($S){
		
		$p=0;
		if ($S>=33) {

			if ($S>=33&&$S<40)
				$p=$p+1.0;

			else  if ($S>=40&&$S<50)
				$p=$p+2.0;

			else if ($S>=50&&$S<60)
				$p=$p+3.0;

			else if ($S>=60&&$S<70)
				$p=$p+3.5;
			else if ($S>=70&&$S<80)
				$p=$p+4;

			else if ($S>=80)
				$p=$p+5;

		}
		return $p;


	}
	public function info()
	{



		$classes = Input::get('classes');
		$section = Input::get('section');
		$year = Input::get('year');
		$sort = Input::get('sort');
			$by = Input::get('by');
		$message="check";

		$code="0000";
		if($classes=="six")
			$code="0600";
		else if($classes=="seven")
			$code="0700";
		else if($classes=="eight")
			$code="0800";
		else if($classes=="nine"&&$section=="science")
			$code="0901";
		else if($classes=="ten"&&$section=="science")
			$code="1001";


		else if($classes=="nine"&&$section=="business")
			$code="0902";
		else if($classes=="ten"&&$section=="business")
			$code="1002";


		else if($classes=="nine"&&$section=="huminities")
			$code="0903";
		else if($classes=="ten"&&$section=="huminities")
			$code="1003";


		$chk=DB::table('table_student_information')
		->where('Registration','LIKE',$year.$code.'%')
		->get();

		if (count($chk)>0) {

			/**** for result view start****/


			$resultTable=DB::table('table_result')
			->where('Registration','LIKE',$year.$code.'%')
			->orderBy($sort,$by)
			->get();
			/**** for result view end****/



			if (  ($classes=="six"||$classes=="seven")||$classes=="eight") 
			{


				$admin=DB::table('table_student_six_eight')
				->where('Registration','LIKE',$year.$code.'%')
				->orderBy('Registration', 'asc')
				->get();



				if(count($admin)>0)
				{
					/*added result resultTable here*/
					return view::make('admin-view-result-six-eight')
					->with('admind',$admin)
					->with('resultTabled',$resultTable);

				}

			}


			else if (  ($classes=="nine"||$classes=="ten")&&$section=="science") 
			{


				$admin=DB::table('table_student_nine_ten_science')
				->where('Registration','LIKE',$year.$code.'%')
				->orderBy('Registration', 'asc')
				->get();

				$data=$admin;

				if(count($admin)>0)
				{

					return view::make('admin-view-result-nine-ten-science')
					->with('admind',$data)
					->with('resultTabled',$resultTable);

				}


			}
			/*if close*/


			else if (  ($classes=="nine"||$classes=="ten")&&$section=="business") 
			{


				$admin=DB::table('table_student_nine_ten_business')
				->where('Registration','LIKE',$year.$code.'%')
				->orderBy('Registration', 'asc')
				->get();


				$data=$admin;

				if(count($admin)>0)
				{

					return view::make('admin-view-result-nine-ten-business')
					->with('resultTabled',$resultTable)
					->with('admind',$data);

				}

			}
			/*if close*/


			else if (  ($classes=="nine"||$classes=="ten")&&$section=="huminities") 
			{


				$admin=DB::table('table_student_nine_ten_arts')
				->where('Registration','LIKE',$year.$code.'%')
				->orderBy('Registration', 'asc')
				->get();


				$data=$admin;

				if(count($admin)>0)
				{

					return view::make('admin-view-result-nine-ten-arts')
					->with('resultTabled',$resultTable)
					->with('admind',$data);

				}


			}


		}

		else
		{
			return view::make('admin-view-result');
		}


	}



}



