<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>RESULT PROCESSING SYSTEM</title>

	<!-- Bootstrap -->

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


	<link rel="stylesheet" href="{{ URL::asset('own/bootstrap/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('own/css/style.css') }}" />

	<link rel="stylesheet" href="{{ URL::asset('own/css/admin/admin-add-result.css') }}" />

	<!--link href="css/bootstrap.min.css" rel="stylesheet"-->

</head>

<body >
	@extends('layouts.header')

	<!--main body is started -->

	<!--main body jumbotron starting-->
	<div class="container">
		<div class="jumbotron text-center jumboHeading" >
			<h1>VIEW RESULT</h1>
		</div>
	</div>

	<!--main content is started -->
	<div class="col-sm-1 ">

	</div>


	<div class="col-sm-10 ">

		<form method="post" action="#"> 
			<!--	{{ csrf_field() }}  -->
			
			<table class="table  table-hover table-bordered" style="text-align: center; background-color: white;">

				<tr style=" background-color: #A2A4BD;">
					<td>Registration</td>
					<td>Banga 1st</td>
					<td>Bangla 2nd</td>
					<td>English 1st</td>
					<td>Engliash 2nd</td> 
					<td>Math</td>
					<td>Religion</td>
					<td>Genera Science</td>
					<td>ICT</td>
					<td>Physical Education</td>
					<td>Economics</td>
					<td>Civics</td>
					<td>Geography</td>
					<td>History</td>

				</tr>

				@foreach($admind as $admin)
				<tr>

					<td>{{$admin->Registration}}</td>
					<td>{{$admin->BanglaFirst}}</td>
					<td>{{$admin->BanglaSecond}}</td>
					<td>{{$admin->EnglishFirst}}</td>
					<td>{{$admin->EnglishSecond}}</td>
					<td>{{$admin->Math}}</td>
					<td>{{$admin->Religion}}</td>
					<td>{{$admin->GeneralScience}}</td>
					<td>{{$admin->InformationAndCommunication}}</td>
					<td>{{$admin->PhysicalEducation}}</td>
					<td>{{$admin->Economics}}</td>
					<td>{{$admin->Civics}}</td>
					<td>{{$admin->Geograpgy}}</td>
					<td>{{$admin->History}}</td>

					<!--td><input type="number" name="{{$admin->Registration}}mark"></td-->
				</tr>
				@endforeach

				<br>

			</table>
				<table class="table  table-hover table-bordered" style="text-align: center; background-color: white;">

				<tr style="background-color: #A2A4BD;">
					<td>Registration</td>
					<td>Total Marks</td>
					<td>Status</td>
					<td>Grade</td>
					<td>Point</td> 
					<td>Total Pass Subject</td>
					<td>Total Fail Subject</td>
					

				</tr>

				@foreach($resultTabled as $resultTable)
				<tr>

					<td>{{$resultTable->Registration}}</td>
					<td>{{$resultTable->TotalMarks}}</td>
					<td>{{$resultTable->Status}}</td>
					<td>{{$resultTable->Grade}}</td>
					<td>{{$resultTable->Point}}</td>
					<td>{{$resultTable->NumberOfPass}}</td>
					<td>{{$resultTable->NumberOfFail}}</td>

					<!--td><input type="number" name="{{$admin->Registration}}mark"></td-->
				</tr>
				@endforeach

				<br>

			</table>

			<!--div class="input-group" style="float: right;">
				<button type="submit" class="btn btn-sreach btn-primary" name="btn-chnage" ><i class="fa  fa-plus fa-lg" aria-hidden="true"></i> Add</button>
			</div-->
			<br><br><br><br>
		</form>
	</div>

	<div class="col-sm-1 ">

	</div>


	<!--main body is ended -->

	<!--main body is ended -->



	<!-- footer-->
	<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation" >
		<div class="container">
			<p id="footer">Spectator Pioneer&copy;2017</p>
		</div>
	</div>
	<!--footer close -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="own/bootstrap/js/bootstrap.min.js"></script>
	<!--script src="js/bootstrap.min.js"></script-->

</body>
</html>