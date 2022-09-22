<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   
    <!--link rel="stylesheet" type="text/css" href="public/css/main.css"-->
</head>
<body>
    <div class="container text-center">
                    <legend>
                        Datos de acceso
                    </legend>
        <div class="d-flex justify-content-md-center">
            <form class="form">
                <fieldset>
                    <br>
                    <label>
                        Email
                    </label>
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="email" class="form-control" placeholder="username@fakemail.com" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <label>
                        Password
                    </label>
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">*</span>
                    <input type="password" class="form-control" placeholder="* * * * * * " aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
            </form>
        </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>