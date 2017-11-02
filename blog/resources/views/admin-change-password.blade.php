<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>RESULT PROCESSING SYSTEM</title>

	<!-- Bootstrap -->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	

<link rel="stylesheet" href="{{ URL::asset('own/bootstrap/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('own/css/style.css') }}" />

 <link rel="stylesheet" href="{{ URL::asset('own/css/admin/admin-forgot-password.css') }}" />

 <link rel="stylesheet" href="{{ URL::asset('own/css/admin/admin-index.css') }}" />


	<!--link href="css/bootstrap.min.css" rel="stylesheet"-->

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
  


	<div class="jumbotron" id="jumbo">
		<div class="container">




			<!--main body is started -->

			<div class="row" >

				<!--1st column strat-->
				<div class="col-sm-3">
					

				</div>
				<!--1st column ended-->


				<!--2nd column strat-->
				<div class="col-sm-6 loginClass">
					<div id="change-password-form">
						<br>
						<form method="post" action="admin-account.blade.php" autocomplete="off">

							<div class="col-md-12">
								<i class="fa fa-user-secret fa-5x" aria-hidden="true"></i>
								<br><br><br><br>

								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
										<input type="password" name="pass" class="form-control" placeholder="Old Password" maxlength="15" />
									</div>
								</div>

									<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
										<input type="password" name="pass" class="form-control" placeholder="New Password" maxlength="15" />
									</div>
								</div>

									<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
										<input type="password" name="pass" class="form-control" placeholder="Confirm New Password" maxlength="15" />
									</div>
								</div>

								<div class="form-group">
									<hr />
								</div>

								<div class="form-group">
								<div class="col-md-6">
									<button type="submit" class="btn btn-block btn-primary" name="btn-chnage">Change Password</button>
								</div>
								<div class="col-md-6" >
									<button type="submit" class="btn btn-block btn-danger" name="btn-cancel">Cancel</button>
									<br>
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
		</div>
	</div>
	<!--main body ended -->

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