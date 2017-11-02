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
			<h1>[ADD RESULT]</h1>
		</div>
	</div>

	<!--main content is started -->
	<div class="col-sm-1 ">

	</div>


	<div class="col-sm-10 ">
	          
		<form method="post" action="{{action('AdminAddResult@update')}}"> 
            {{ csrf_field() }}
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><span ><i class="fa fa-book fa-lg" aria-hidden="true"></i> Slect Subject</span></span>
					<select id="selectClass" class="form-control" name="subject">
						<option value="BanglaFirst">Bangla 1st</option>
						<option value="BanglaSecond">Bangla 2nd</option>
						<option value="EnglishFirst">English 1st</option>
						<option value="EnglishSecond">English 2nd</option>
						<option value="Math">Math</option>
						<option value="Religion">Religion</option>
						<option value="GeneralScience">General Science</option>
						<option value="BangladeshAndWorld">Introduce of Bangladesh and World</option>
						<option value="ICT">Information and Communication Science</option>
						<option value="Agriculture">Agriculture</option>
						<option value="WorkAndEducation">Work and job-oriented education</option>
						<option value="PhysicalEducation">Physical Education</option>
						<option value="FineArts">Fine Arts</option>
					</select>

				</div>
			</div>



			<table class="table  table-hover table-bordered" style="text-align: center; background-color: white;">

				<tr style="font-size: 20px; background-color: #A2A4BD;">
					<td>Registration</td>
					<td>Name</td>
					<td>Class</td>
					<td>Year</td>
					<td>Marks</td> 
				</tr>

				@foreach($admind as $admin)
				<tr>

					<td>{{$admin->Registration}}</td>
					<td>{{$admin->Student}}</td>
					<td>{{$admin->Class}}</td>
					<td>{{$admin->Year}}</td> 
				<td><input type="number" name="{{$admin->Registration}}mark"></td>
				</tr>
				@endforeach

				<br>

			</table>

				<div class="input-group" style="float: right;">
					<button type="submit" class="btn btn-sreach btn-primary" name="btn-chnage" style="margin-bottom: 50px;" ><i class="fa  fa-plus fa-lg" aria-hidden="true"></i> Add</button>
				</div>
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