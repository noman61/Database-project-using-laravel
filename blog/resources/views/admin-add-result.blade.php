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
  <!--main body jumbotron ended-->

  <!-- minhaz starting-->

  <!--1st column strat-->
  <div class="col-sm-2 ">

  </div>
  <!--1st column ended-->


  <!--2nd column strat for add result-->
  <div class="col-sm-8" style="object-position: center; background-color: white;">
   <form method="post"  action="{{action('AdminAddResult@info')}}" autocomplete="on">
{{ csrf_field() }}



     <br><br>
     <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon"><span ><i class="fa fa-tasks fa-lg" aria-hidden="true"></i> CLASS</span></span>
        <select name="classes" class="form-control" id="selectClass" required="true" >
          <option value="six">SIX</option>
          <option value="seven">SEVEN</option>
          <option value="eight">EIGHT</option>
          <option value="nine">NINE</option>
          <option value="ten">TEN</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon"><span ><i class="fa fa-tasks fa-lg" aria-hidden="true"></i> Section</span></span>
        <select name="section" class="form-control" id="selectClass" required="true">
          <option value="n/a">N/A</option>
          <option value="science">SCIENCE</option>
          <option value="business">BUSENESS STUDIES</option>
          <option value="huminities">HUMINITIES</option>
        </select>
      </div>
    </div>



    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon"><span ><i class="fa fa-calendar fa-lg" aria-hidden="true"></i> Year</span></span>
        <select name="year" class="form-control" id="selectClass" required="true" >
          <option value="2017"> 2017 </option>
          <option value="2018"> 2018 </option>
          <option value="2019"> 2019 </option>
          <option value="2020"> 2020 </option>
          <option value="2021"> 2021 </option>
          <option value="2022"> 2022 </option>
          <option value="2023"> 2023 </option>
          <option value="2024"> 2024 </option>
          <option value="2025"> 2025 </option>
          <option value="2026"> 2026 </option>
          <option value="2027"> 2027 </option>
          <option value="2028"> 2028 </option>
          <option value="2029"> 2029 </option>
          <option value="2030"> 2030 </option>
          <option value="2031"> 2031 </option>
          <option value="2032"> 2032 </option>
          <option value="2033"> 2033 </option>
          <option value="2034"> 2034 </option>
          <option value="2035"> 2035 </option>
          <option value="2036"> 2036 </option>
          <option value="2037"> 2037 </option>
          <option value="2038"> 2038 </option>
          <option value="2039"> 2039 </option>
          <option value="2040"> 2040 </option>
          <option value="2041"> 2041 </option>
          <option value="2042"> 2042 </option>
          <option value="2043"> 2043 </option>
          <option value="2044"> 2044 </option>
          <option value="2045"> 2045 </option>
          <option value="2046"> 2046 </option>
          <option value="2047"> 2047 </option>
          <option value="2048"> 2048 </option>
          <option value="2049"> 2049 </option>
          <option value="2050"> 2050 </option>
          <option value="2051"> 2051 </option>
          <option value="2052"> 2052 </option>
          <option value="2053"> 2053 </option>
          <option value="2054"> 2054 </option>
          <option value="2055"> 2055 </option>
          <option value="2056"> 2056 </option>
          <option value="2057"> 2057 </option>
          <option value="2058"> 2058 </option>
          <option value="2059"> 2059 </option>
          <option value="2060"> 2060 </option>
          <option value="2061"> 2061 </option>
          <option value="2062"> 2062 </option>
          <option value="2063"> 2063 </option>
          <option value="2064"> 2064 </option>
          <option value="2065"> 2065 </option>
          <option value="2066"> 2066 </option>
          <option value="2067"> 2067 </option>
          <option value="2068"> 2068 </option>
          <option value="2069"> 2069 </option>
          <option value="2070"> 2070 </option>
          <option value="2071"> 2071 </option>
          <option value="2072"> 2072 </option>
          <option value="2073"> 2073 </option>
          <option value="2074"> 2074 </option>
          <option value="2075"> 2075 </option>
          <option value="2076"> 2076 </option>
          <option value="2077"> 2077 </option>
          <option value="2078"> 2078 </option>
          <option value="2079"> 2079 </option>
          <option value="2080"> 2080 </option>
          <option value="2081"> 2081 </option>
          <option value="2082"> 2082 </option>
          <option value="2083"> 2083 </option>
          <option value="2084"> 2084 </option>
          <option value="2085"> 2085 </option>
          <option value="2086"> 2086 </option>
          <option value="2087"> 2087 </option>
          <option value="2088"> 2088 </option>
          <option value="2089"> 2089 </option>
          <option value="2090"> 2090 </option>
          <option value="2091"> 2091 </option>
          <option value="2092"> 2092 </option>
          <option value="2093"> 2093 </option>
          <option value="2094"> 2094 </option>
          <option value="2095"> 2095 </option>
          <option value="2096"> 2096 </option>
          <option value="2097"> 2097 </option>
          <option value="2098"> 2098 </option>
          <option value="2099"> 2099 </option>
        </select>
      </div>
    </div>


    <div class="form-group">
      <div class="input-group" style="float: right;">
        <button type="submit" class="btn btn-sreach btn-primary" name="btn-chnage" ><i class="fa  fa-search fa-lg" aria-hidden="true"></i> Add result</button>
      </div>

    </div>
    <br>
    <hr>

  </form>
  <!--2nd sreach ended-->
  <!--*************************************-->
<div>
  <form method="post"  action="{{action('AdminAddResult@registrationCheck')}}" autocomplete="off">
{{ csrf_field() }}
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon"><span ><i class="fa fa-id-badge fa-lg" aria-hidden="true"></i></span></span>
        <input type="number" name="registration" class="form-control" placeholder="Registration Number"  required="true" />
      </div>
    </div>

    <div class="form-group">
      <div class="input-group" style="float: right;">
        <button type="submit" class="btn btn-sreach btn-primary" name="btn-chnage" ><i class="fa  fa-search fa-lg" aria-hidden="true"></i> Add result</button>
      </div>

    </div>
    <br><br>
 
  </form>
</div>
<br><br><br>
</div>
<!--2nd column ended-->
<!--3rd column strat-->
<div class="col-sm-2 ">

</div>
<!--3rd column ended-->
<!-- minhaz ending-->
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