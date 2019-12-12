<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
	<h1>Welcome home! {{ session('uname') }}</h1>
	<br>
	<a href="{{route('student.add')}}">Add Member</a> |
	<a href="{{ route('student.index') }} ">Member List</a> |
    <a href="{{ route('livesearch.index') }} ">View User Information </a> |
    <a href="{{ route('student.addcar') }} ">Car post  </a> |
    <a href="{{ route('student.carlist') }} ">Available car  </a> |

	<a href="{{ route('logout.index') }}">logout</a>

</body>
</html>
