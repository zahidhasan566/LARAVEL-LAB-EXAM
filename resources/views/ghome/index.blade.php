<!DOCTYPE html>
<html>
<head>
    <title> WELCOME TO CAR RENT </title>
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
<br>


<h1> <a href="{{ route('login.index') }}">login</a></h1>
<h1> AVAILABLE CAR </h1>
@foreach($car as $car)
    <tr>

      <h3>CAR NAME: <td>{{ $car->cname }}</td></h3>
       <h4>CAR TYPE:<td>{{ $car->ctype }}</td></h4>
   <h5> CAR PRICE: <td>{{ $car->cprice }}</td></h5>
        ----------------------------------

    </tr>
@endforeach

</body>
</html>
