<!DOCTYPE html>
<html>
<head>
	<title>userlist</title>
</head>
<body>
	<h1>Details </h1>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>
	<table border="0">
	<tr>
			<td>Name :</td>
			<td>{{$user['name']}}</td>
		</tr>
		<tr>
			<td>Company Name :</td>
			<td>{{$user['cmpname']}}</td>
		</tr>
		<tr>
			<td>Phone :</td>
			<td>{{$user['phone']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$user['username']}}</td>
		</tr>
		<tr>
			<td>PASSWORD :</td>
			<td>{{$user['password']}}</td>
		</tr>
	</table>
</body>
</html>