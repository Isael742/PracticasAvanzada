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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="https://static.vecteezy.com/system/resources/previews/002/442/856/original/f-letter-logo-template-initials-sign-free-vector.jpg" alt="Bootstrap" width="30" height="24">F Clan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--CONTAINER-->
<div class="container-fluid">

        <div class="row">
                <div class="col-lg-2 d-sm-none d-md-block">
                    <aside class="bg-light">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                                </li>
                                <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                                </li>
                        </ul>

                    </aside>
                    
                </div>

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
                        
                        <?php{
                       for ($i = 1; $i <= 10; $i++):}{
                        ?>
                            <div class="col-md-3">

                                <div class="card" style="width: 18rem;">
                                    <img src="https://static.vecteezy.com/system/resources/previews/002/442/856/original/f-letter-logo-template-initials-sign-free-vector.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar">Editar</buttom>
                                        <a href="#" class="btn btn-danger">Eliminar</a>
                                        <a href="detalles.php" class="btn btn-info">Detalles</a>
                                    </div>
                                </div>
                            </div>
                            
                            <?php}?>
                        
                    </div>

                
                    </div>
                </div>
                
        </div>
</div>

<!--añadir-->
<div class="modal fade" id="ModalAñadir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
                        
                        <?php
                       for ($i = 1; $i <= 8; $i++):{?>
                       <br>
                          <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">@</span>
                          <input type="email" class="form-control" placeholder="username@fakemail.com" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                                  
                       
                          <?php}?>
                        
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--editar-->
<div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
                        
                        <?php{
                       for ($i = 1; $i <= 10; $i++):?>
                       <br>
                          <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">@</span>
                          <input type="email" class="form-control" placeholder="username@fakemail.com" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                                  
                       
                          <?php}?>
                        
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>