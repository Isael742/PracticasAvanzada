<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="http://127.0.0.1:8000/clients" method="post">

    @csrf

    <label for="">nombre</label>
    <input type="text" name="name" id="name">

    <label for="">email</label>
    <input type="email" name="email" id="email">

    <label for="">Número de telefono</label>
    <input type="text" name="phone" id="phone">

    <button type="submit">Guardar</button>
    </form>
</body>
</html>