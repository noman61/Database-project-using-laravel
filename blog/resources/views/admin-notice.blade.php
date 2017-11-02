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

 <link rel="stylesheet" href="{{ URL::asset('own/css/admin/admin-account.css') }}" />



</head>

<body>
@extends('layouts.header')


  <div class="jumbotron" id="jumbo">
    <div class="container">




      <!--main body is started -->
      <br><br>
      <div class="row" id="firstThumnailRow">


  <!--0th column strat-->
     <div class="col-sm-2">
   </div>
   <!--0th column ended-->

        <!--1st column strat-->
        <div class="col-sm-4">
          <a href="admin-create-account.blade.php" class="thumnail">
            <figure>
             <img alt="current notice" src="{{URL::asset('own/images/thumb1.png')}}" class="thumImg"> 
           </a>
           <figcaption>View Current Notice</figcaption>
         </figure>
       </div>
       <!--1st column ended-->


       <!--2nd column strat-->
       <div class="col-sm-4">
        <a href="{{URL::to('/admin-add-a-notice')}}"  class="thumnail">
          <figure>
           <img alt="add notice" src="{{URL::asset('own/images/thumb1.png')}}" class="thumImg"> 
         </a>
         <figcaption>Add a Notice</figcaption>
       </figure>

     </div>
     <!--2nd column ended-->
     <!--3rd column strat-->
     <div class="col-sm-2">
   </div>
   <!--3rd column ended-->

 </div>

 <!--main body is ended -->


</div>
</div>




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