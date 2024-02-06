<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
     <h1>Salut</h1>
@forelse ( $users as $user )
    <div>
        <b>Name</b>
        {{$user->name}}<br>
        <b>Email</b>
        {{$user->email}}
        <p>------------</p>
    </div>
@empty
    <p>Nu sunt utilizatori</p>
@endforelse

   
</body>
</html>