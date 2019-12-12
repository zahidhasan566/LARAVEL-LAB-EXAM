<!DOCTYPE html>
<html>
<head>
	<title>userlist</title>
</head>
<body>
	<h1>User List</h1>

	<a href="{{route('home.emp')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>
	<table border="1">
		<tr>

		<td> Id</td>
			<td>Product name</td>
			<td>Quantity</td>
			<td>price</td>

			<td>ACTION</td>
		</tr>


	@foreach($users as $std)
		<tr>
		<td>{{ $std->id }}</td>
			<td>{{ $std->name }}</td>
			<td>{{ $std->quantity }}</td>
			<td>{{ $std->price }}</td>


			<td>
				<a href="{{ route('job.edit', $std->id) }}"> EDIT </a> |
				<a href="{{ route('job.delete', $std->id) }}"> DELETE </a> |
			</td>
		</tr>
	@endforeach

	</table>
</body>
</html>
