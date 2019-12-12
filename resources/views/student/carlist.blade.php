<!DOCTYPE html>
<html>
<head>
    <title>car list</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Car  List</h1>

<a href="{{route('home.index')}}">Back</a> |
<a href="{{route('logout.index')}}">logout</a>

<br><br>
<table border="1">
    <tr>
        <td>CAR NAME </td>
        <td>CAR TYPE </td>
        <td>CAR PRICE</td>

    </tr>


    @foreach($carlist as $car)
    <tr>

        <td>{{ $car->cname }}</td>
        <td>{{ $car->ctype }}</td>
        <td>{{ $car->cprice }}</td>

        <td>
            <a href="{{ route('student.caredit', $car->id) }}"> EDIT </a> |
            <a href="{{ route('student.deletecar', $car->id) }}"> DELETE </a>
        </td>
    </tr>
    @endforeach

</table>
</body>
</html>
