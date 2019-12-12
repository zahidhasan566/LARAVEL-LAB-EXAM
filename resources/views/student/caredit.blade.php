<!DOCTYPE html>
<html>
<head>
	<title>Student Edit</title>
</head>
<body>
	<h1> CAR  MODIFY </h1>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post">
@csrf
	<table border="0">
	<tr>
			<td> Car Name</td>
			<td><input type="text" name="cname" value="{{$car['cname']}}"></td>
        <td> {{$errors->first('cname')}}</td>

		</tr>
		<tr>
			<td>Car type </td>
			<td><input type="text" name="ctype" value="{{$car['ctype']}}"></td>
            <td> {{$errors->first('ctype')}}</td>

		</tr>
		<tr>
		<tr>
			<td>car price </td>
			<td><input type="text" name="cprice" value="{{$car['cprice']}}"></td>
            <td> {{$errors->first('cprice')}}</td>



		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</body>
</html>
