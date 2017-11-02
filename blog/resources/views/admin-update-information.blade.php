<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>RESULT PROCESSING SYSTEM</title>

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ URL::asset('own/bootstrap/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('own/css/style.css') }}" />

 <link rel="stylesheet" href="{{ URL::asset('own/css/admin/admin-information-collection.css') }}" />



</head>

<body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
         <img  src="{{URL::asset('own/images/school.png')}}" alt="logo"  id="school_logo"> 

        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a id="heading_name" class="navbar-brand" href="admin-home.blade.php">RESULT PROCESSING SYSTEM</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Home</a></li>       
          <li><a href="#about">1111111</a></li>
          <li><a href="#about">222222</a></li>
          <li><a href="#about">333333</a></li>
          <li><a href="#about">444444</a></li>
          <li><a href="#about">555555</a></li>
          <li><a href="#about">666666</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="dropdown-header">Admin & Dashboard</li>
              <li><a href="#">User name</a></li>
              <li><a href="#">Email</a></li>
              <li class="divider"></li>
              <li><a href="#">LogOut</a></li>

            </ul>
          </li>            
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <!--navbar ended-->
  

  <!--main body is started -->
  
  <!--main body jumbotron starting-->
  <div class="container">
    <div class="jumbotron text-center jumboHeading" >
      <h1>UPDATE INFORMATION</h1>
    </div>
  </div>
  <!--main body jumbotron ended-->
  <!--main body is started -->

  <div  >

    <!--1st column strat-->
    <div class="col-sm-3">


    </div>
    <!--1st column ended-->


    <!--2nd column strat-->
    <div class="col-sm-6 informationCollection">
      <div id="change-password-form">
        <br>
        <form method="post" action="admin-information-collection.blade.php" autocomplete="off">

          <div class="col-md-12">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" name="studentname" class="form-control" placeholder="Student Full Name" />
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" name="fathername" class="form-control" placeholder="Student Father Name" />
              </div>
            </div>


            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span><i class="fa fa-female fa-lg" aria-hidden="true"></i></span></span>
                <input type="text" name="mothername" class="form-control" placeholder="Student Mother Name"  />
              </div>
            </div>


            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span ><i class="fa fa-id-badge fa-lg" aria-hidden="true"></i></span></span>
                <input type="number" name="reg" class="form-control" placeholder="Registration Number" maxlength="11" />
              </div>
            </div>



    
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span ><i class="fa fa-calendar fa-lg" aria-hidden="true"></i> Year</span></span>
                <input type="date" name="year" class="form-control" />
              </div>
            </div>
            

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span ><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span></span>
                <input type="number" name="mobile" class="form-control" placeholder="Mobile Number" maxlength="12" />
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span ><i class="fa fa-home fa-lg" aria-hidden="true"></i></span></span>
                <input type="text" name="Address" class="form-control" placeholder="Address"  />
              </div>
            </div>



            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span ><i class="fa fa-tasks fa-lg" aria-hidden="true"></i> CLASS</span></span>
                <select class="form-control" id="selectClass" >
                  <option>SIX</option>
                  <option>SEVEN</option>
                  <option>EIGHT</option>
                  <option>NINE</option>
                  <option>TEN</option>
                </select>
              </div>
            </div>



            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span ><i class="fa fa-tasks fa-lg" aria-hidden="true"></i> Class</span></span>
                <select class="form-control" id="selectClass">
                  <option>N/A</option>
                  <option>SCIENCE</option>
                  <option>BUSENESS STUDIES</option>
                  <option>HUMINITIES</option>
                </select>
              </div>
            </div>
            

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span ><i class="fa fa-venus-mars fa-lg" aria-hidden="true"></i> Gender</span></span>
                <select class="form-control" id="selectClass" >
                  <option>FEMALE</option>
                  <option>MALE</option>
                </select>
              </div>
            </div>
            




            
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span ><i class="fa fa-calendar fa-lg" aria-hidden="true"></i> Birthdate</span></span>
                <input type="date" name="birthdate" class="form-control" />
              </div>
            </div>



            <div class="form-group">
            </div>

            <div class="form-group">
              <div class="col-md-6">
                <button type="submit" class="btn btn-block btn-primary" name="btn-chnage">Update</button>
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
    <div class="col-sm-3">

    </div>
    <!--3rd column ended-->
  </div>
<!--main body ended -->
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