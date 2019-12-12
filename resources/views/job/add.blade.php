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
			<td>Product Name </td>
			<td><input type="text" name="pname" value=""></td>
            <td> {{$errors->first('pname')}}</td>
		</tr>
		<tr>
		<tr>
			<td>Quantity</td>
			<td><input type="text" name="quantity" value=""></td>
            <td> {{$errors->first('quantity')}}</td>
			<tr>

		<tr>
			<td>Price</td>
			<td><input type="text" name="price" value=""></td>
            <td> {{$errors->first('price')}}</td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>


</body>
</html>
