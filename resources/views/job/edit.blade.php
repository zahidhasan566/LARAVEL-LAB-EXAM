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
			<td><input type="text" name="pname" value="{{$id['name']}}"></td>
        <td> {{$errors->first('name')}}</td>
		</tr>
		<tr>
			<td>Product  Quantity </td>
			<td><input type="text" name="quantity" value="{{$id['quantity']}}"></td>
            <td> {{$errors->first('quantity')}}</td>
		</tr>
        <tr>
            <td>Product  price </td>
            <td><input type="text" name="price" value="{{$id['price']}}"></td>
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
