<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<table>


  @foreach($admind as $admin)
  <tr>
    <td>{{$admin->Father}}</td>
  	<td>{{$admin->Mother}}</td>
  	<td>{{$admin->Class}}</td>
  	<td>{{$admin->Section}}</td>
  	 </tr>
  @endforeach
  	
  	<br>
 
</table>
</body>
</html>