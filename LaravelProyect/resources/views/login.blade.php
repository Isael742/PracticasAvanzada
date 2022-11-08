<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <h1>
        @if (Auth::user())
            {{Auth::user()->name}}
        @endif
    </h1>

    <form action="{{url('login/')}}" method="POST">
        @csrf
        <label for="">Email</label>
        <input type="email" placeholder="Correo" name="email">

        <label for="">Password</label>
        <input type="password" placeholder="*********" name="password">

        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>