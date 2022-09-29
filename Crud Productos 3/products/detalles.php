<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Productos
    </title>
    <style>
        .aside{
            height: 90vh;
        }
        </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <!--NAVBAR-->
    <?php include('../layouts/navbar.resource.php'); ?>
<!--CONTAINER-->
<div class="container-fluid">

        <div class="row">
        <?php include('../layouts/lateral.resource.php'); ?>
                <!--CONTENIDO-->
                <div class="col-lg-10 col-sm-12">
                    <div class="row align-items-start">
                        <div class="col">
                        <h2>
                            Productos
                        </h2>
                        </div>
                        <div class="col">
                        </div>
                        <div class="col">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalAñadir">Añadir</button>
                        </div>
                    </div>
                    <div class="row">
                        
                    </div>

                
                    </div>
                </div>
                
        </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>