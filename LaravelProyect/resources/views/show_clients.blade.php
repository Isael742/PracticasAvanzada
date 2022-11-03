<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Clients</h3>

    <table>
        <thead>
            Clients

            <tr>
                #
            </tr>
            <tr>
                Nombre
            </tr>
            <tr>
                Correo
            </tr>
            <tr>
                Número
            </tr>
        </thead

        <tbody>
            
        @foreach ($clients as $client)

        <tr>

            <td>
                {{$client -> id}}
            </td>

            <td>
                {{$client -> name}}
            </td>

            <td>
                {{$client -> email}}
            </td>

            <td>
                {{$client -> phone}}
            </td>
            <td >
                <a href="{{url('/clients/edit/'.$client->id)}}">Editar</a>
            </td>


            @endforeach
        </tr>
        

        </tbody>
    </table>
</body>
</html>