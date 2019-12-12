<!DOCTYPE html>
<html>
<head>
    <title> WELCOME TO CAR RENT </title>
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
<br>


<h1> <a href="{{ route('logout.index') }}">logout</a></h1>
<h4> <a href="{{ route('student.blog') }}">Blog</a></h4>
<h1> AVAILABLE CAR </h1>
@foreach($car as $car)
    <tr>

        <h3>CAR NAME: <td>{{ $car->cname }}</td></h3>
        <h4>CAR TYPE:<td>{{ $car->ctype }}</td></h4>
        <h5> CAR PRICE: <td>{{ $car->cprice }}</td></h5>
        <h2><a href="{{ route('student.book', [ $car->id,$member['userId']]) }}"> -> BOOK IT </a> </h2>
        ----------------------------------

    </tr>
@endforeach

</body>
</html>
