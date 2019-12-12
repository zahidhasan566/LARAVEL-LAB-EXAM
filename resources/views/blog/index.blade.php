<!DOCTYPE html>
<html>
<head>
    <title>login page</title>
</head>
<body>
<h1>Blog </h1>

<form method="post" >
<!-- @csrf -->

<!-- {{csrf_field()}} -->

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>YOUR OPINION </td>
            <td><input type="text" name="blog"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Submit"></td>
            <td></td>
        </tr>
    </table>
</form>

<div>
    {{session('msg')}}
</div>

</body>
</html>
