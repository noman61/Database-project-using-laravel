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

<body>
@extends('layouts.header')
  <!--main body is started -->
  
  <!--main body jumbotron starting-->
  <div class="container">
    <div class="jumbotron text-center jumboHeading" >
      <h1>ADD NOTICE</h1>
    </div>
  </div>
  <!--main body jumbotron ended-->
<!--1st column strat-->
    <div class="col-sm-1">
A

    </div>
    <!--1st column ended-->


    <!--2nd column strat-->
    <div class="col-sm-10" style="background-color: white">
      <div >
        <br>
        <form method="post" action="#" autocomplete="off">

          <div class="col-md-12">

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-tags fa-1x"> Title</span></span>
                <input  type="text" name="title" class="form-control" />

              </div>
            </div>

        
            <div class="form-group">
              <div class="input-group">
                <textarea placeholder="Before write the notice, adjust the size of area by clicking on the down write corner. " style="height: 300px;min-width: 132% ;background-color:#ffffcc; font-size: 20px;"  type="textarea" name="studentname" class="form-control"  /></textarea>

              </div>
            </div>


 <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-paperclip fa-1x"> Attach file</span></span>
                <input  type="file" name="file" class="form-control" />

              </div>
            </div>
        
           

            <div class="form-group">
              <div class="col-md-6">
                <button type="submit" class="btn btn-block btn-primary" name="btn-chnage">Add</button>
              </div>
              <div class="col-md-6" >
                <button type="submit" class="btn btn-block btn-danger" name="btn-cancel">Cancel</button>
                <br>

                <br><br><br>
                

              </div>
            </div>

          </div>
        </form>

      </div>  


    </div>
    <!--2nd column ended-->
    <!--3rd column strat-->
    <div class="col-sm-1">

    </div>
    <!--3rd column ended-->
  </div>
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