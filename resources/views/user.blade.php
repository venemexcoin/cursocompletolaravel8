<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <h1>User View</h1>
    <h2>User Name {{$name}}</h2>

    <p>Nombre: {{ $users['name'] }}</p>
    <p>Email: {{ $users['email'] }}</p>
    <p>Telefono: {{ $users['phone'] }}</p>
</body>
</html>