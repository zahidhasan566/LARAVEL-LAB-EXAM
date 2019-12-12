<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
</head>
<body>
	<h1>Add Student</h1>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post" enctype="multipart/form-data" >
	{{csrf_field()}}
	<table border="0">
	<tr>
			<td>Name</td>
			<td><input type="text" name="name" value=""></td>
        <td> {{$errors->first('name')}}</td>
		</tr>
		<tr>
			<td>Contact No</td>
			<td><input type="text" name="contact" value=""></td>
            <td> {{$errors->first('contact')}}</td>
		</tr>
		<tr>
		<tr>
			<td>Phone</td>
			<td><input type="text" name="phone" value=""></td>
            <td> {{$errors->first('phone')}}</td>
			<tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value=""></td>
            <td> {{$errors->first('username')}}</td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value=""></td>
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
