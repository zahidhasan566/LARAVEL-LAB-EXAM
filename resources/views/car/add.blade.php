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
			<td> Car Name</td>
			<td><input type="text" name="cname" value=""></td>
        <td> {{$errors->first('cname')}}</td>

		</tr>
		<tr>
			<td>Car type</td>
			<td><input type="radio" name="ctype" value="private">privatecar</td>
            <td><input type="radio" name="ctype" value="picup">picup</td>
            <td><input type="radio" name="ctype" value="micro">microbus</td>


		<tr>
			<td>Car rent price </td>
			<td><input type="text" name="cprice" value=""></td>
            <td> {{$errors->first('cprice')}}</td>

			<tr>



		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>

</body>
</html>
