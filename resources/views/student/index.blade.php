<!DOCTYPE html>
<html>
<head>
	<title>userlist</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>User List</h1>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>ContactNo</td>
			<td>Phone</td>
			<td>USERNAME</td>
			<td>Type</td>
			<td>PASSWORD</td>
			<td>ACTION</td>
		</tr>


	@foreach($users as $std)
		<tr>
			<td>{{ $std->userId }}</td>
			<td>{{ $std->name }}</td>
			<td>{{ $std->contact }}</td>
			<td>{{ $std->phone }}</td>
			<td>{{ $std->username }}</td>
			<td>{{ $std->type }}</td>
			<td>{{ $std->password }}</td>
			<td>
				<a href="{{ route('student.edit', $std->userId) }}"> EDIT </a> |
				<a href="{{ route('student.delete', $std->userId) }}"> DELETE </a> |
				<a href="{{ route('student.details', $std->userId) }}"> Details </a>
			</td>
		</tr>
	@endforeach

	</table>
</body>
</html>
