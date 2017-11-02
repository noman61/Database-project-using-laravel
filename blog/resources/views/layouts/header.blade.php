


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
      <a id="heading_name" class="navbar-brand" href="{{URL::to('/home')}}">RESULT PROCESSING SYSTEM</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{URL::to('/home')}}">Home</a></li>       
        <li><a href="{{URL::to('/admin-information-collection')}}">Collect Information</a></li>
        <li><a href="{{URL::to('/admin-add-result')}}">Add Result</a></li>
        <li><a href="{{URL::to('/admin-view-result')}}">Result</a></li>
        <li><a href="#about">Update Information</a></li>
        <li><a href="#about">Account</a></li>
        <li><a href="{{URL::to('/admin-notice')}}">Notice</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            {{ Auth::user()->name }}
            <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
            
          </ul>
        </li>            
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
<!--navbar ended-->
