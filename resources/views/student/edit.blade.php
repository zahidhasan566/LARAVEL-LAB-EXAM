<!DOCTYPE html>
<html>
<head>
	<title>Student Edit</title>
</head>
<body>
	<h1>Edit Student</h1>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post">
@csrf
	<table border="0">
	<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$user['name']}}"></td>
        <td> {{$errors->first('name')}}</td>
		</tr>
		<tr>
			<td>Contact No</td>
			<td><input type="text" name="contact" value="{{$user['contact']}}"></td>
            <td> {{$errors->first('contact')}}</td>
		</tr>
		<tr>
		<tr>
			<td>Phone</td>
			<td><input type="text" name="phone" value="{{$user['phone']}}"></td>
            <td> {{$errors->first('phone')}}</td>
			<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="{{$user['username']}}"></td>
            <td> {{$errors->first('username')}}</td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="{{$user['password']}}"></td>
            <td> {{$errors->first('password')}}</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</body>
</html>
