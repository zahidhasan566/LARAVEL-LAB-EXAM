<!DOCTYPE html>
<html>
<head>
	<title>BOOKING CONFIRMATION </title>
</head>
<body>
	<h1>User List</h1>

	<a href="{{route('home.emp')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>
	<table border="1">
		<tr>

            <h3>CAR NAME: {{ $car->cname }}</h3>
            <h4>CAR TYPE:{{ $car->ctype }}</h4>
            <h5> CAR PRICE:{{ $car->cprice }}</h5>




		</tr>
        <tr>
           if confirm ,pay to
             bkash number :01774601166

        </tr>
        <br>
        <tr>
         <a href=""> Confirm </a> |
         <a href=""> Cancel </a>


        </tr>



	</table>
</body>
</html>
