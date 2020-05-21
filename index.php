<?php include("conexion.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!--Utilizacion de CDN Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
    crossorigin="anonymous">
     <!--FONT AWESOME 5 -->
    <script src="https://kit.fontawesome.com/8b8b9bb2cd.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e9867f9cfb.js" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" data-auto-replace-svg="nest"></script>
    
</head>
<body>
    <nav class= "navbar navbar-dark bg-dark">
        <div class="container">
            <a href = "crud.php" class= "navbar-brand">PHP MYSQL CRUD </a>
        </div>
</nav>

<div class="container p-4">
    <div class ="row">
        <div class="col-md-4">
            <?php if (isset($_SESSION['message'])){?>
                <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <?=$_SESSION['message']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                 </div>

            <?php session_unset();}?>

        <div class="card card-body">
            <form action="guardarformulario.php"method="POST">
                <div class="form-grup">
                    <input type="number" name="Id" class="form-control"
                    placeholder="Id " autofocus>
                </div>
                <br>

                <div class="form-grup">
                    <input type="text" name="nombres" class="form-control"
                    placeholder="nombres" autofocus>
                </div>
                <br>

                <div class="form-grup">
                    <input type="text" name="apellidos" class="form-control"
                    placeholder="apellidos" autofocus>
                </div>
                <br>

                <div class="form-grup">
                    <input type="text" name="telefono" class="form-control"
                    placeholder="telefono" autofocus>
                </div>
                <br>

                <div class="form-grup">
                    <input type="text" name="direccion" class="form-control"
                    placeholder="direccion" autofocus>
                </div>
                <br>

                <div class="form-grup">
                    <input type="text" name="correo_electronico" class="form-control"
                    placeholder="correo_electronico" autofocus>
                </div>
                <br>
                <input type="submit" class="btn btn-success btn-block"
                name="Guardar" value="Guardar">
            </form>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Correo_Electronico</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    $query = "SELECT * FROM clientes";
                    $result_datos= mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_datos)) {?>
                        <tr>
                            <td><?php echo $row['Id'] ?> </td>
                            <td><?php echo $row['nombres'] ?> </td>
                            <td><?php echo $row['apellidos'] ?> </td>
                            <td><?php echo $row['telefono'] ?> </td>
                            <td><?php echo $row['direccion'] ?> </td>
                            <td><?php echo $row['correo_electronico'] ?> </td>
                            <td>
                                <a href="editar.php?Id=<?php echo $row['Id']?>"class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                                </a>
                                <a href="eliminar.php?Id=<?php echo $row['Id']?>"class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                                </a>
                                
                            </td>
                        </tr>

                    <?php } ?>
                </tbody> 

            </table>

            </div>

        </div>
          
        </li>
    </div>   

</div>



   