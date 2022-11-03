<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="{{url('clients/')}}" method="post">

    @method('PUT')
    @csrf

    <label for="">nombre</label>
    <input type="text" name="name" id="name" value="{{$client->name}}">

    <br>

    <label for="">email</label>
    <input type="email" name="email" id="email" value="{{$client->email}}" >

    <br>

    <label for="">Número de telefono</label>
    <input type="text" name="phone" id="phone" value="{{$client->phone}}">

    <br>

    <input type="hidden" name="id" value="{{$client->id}}">

    <button type="submit">Actualizar</button>
    </form>
</body>
</html>