<?php 
    include '..\app\ProductsController.php';
      $producto = new ProductsController();
      $data = $producto->getProductos();
      $objetos = json_decode($data)->data;
  ?>
<!DOCTYPE html>
<html lang="es">
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
<!--Menú lateral-->
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
                        
                        <?php foreach($objetos as $producto):?>
                            <div class="col-md-3">

                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo $producto->cover; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $producto->name; ?></h5>
                                        <p class="card-text"><?php echo $producto->description; ?></p>
                                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEditar">Editar</a>
                                        <a href="#" class="btn btn-danger" onclick="delete(this)">Eliminar</a>
                                        <a href="detalles.php" class="btn btn-info">Detalles</a>
                                    </div>
                                </div>
                            </div>
                            
                        <?php endforeach; ?>
                      
                    </div>

                
                    </div>
                </div>
                
        </div>
</div>

<!--Añadir Producto-->
<div class="modal fade" id="ModalAñadir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Nuevo Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
                        
                       <br>
                          <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">Nombre</span>
                          <input type="email" class="form-control" placeholder="Nombre del Producto" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                                  
                                              
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--Editar Producto-->
<div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar datos de Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
                        
                      <br>
                          <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">Nombre</span>
                          <input type="email" class="form-control" placeholder="Nombre del Producto" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                                  
                    
                        
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
            function delete(target){
                Swal.fire({
                icon: 'error',
                title: 'Eliminar Producto',
                text: 'Se ah eliminado este producto'
                })
            }
        </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>