<?php
    include("conexion.php");
    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];
        $query = "SELECT * FROM clientes WHERE Id =$Id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $nombres = $row['nombres'];
            $apellidos = $row['apellidos'];
            $telefono = $row['telefono'];
            $direccion = $row['direccion'];
            $correo_electronico = $row['correo_electronico'];
    
        }
    }
    if(isset($_POST['update'])){
        
        $Id = $_GET['Id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $correo_electronico = $_POST['correo_electronico'];
        
        $query = "UPDATE clientes set nombres = '$nombres', apellidos = '$apellidos', telefono = '$telefono',
        direccion = '$direccion', correo_electronico = '$correo_electronico' WHERE Id = $Id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Datos Actualizado Correctamente';
        $_SESSION['message_type']="danger";
        header("Location: index.php");

    }
?>
<?php include("includes/header.php")?>
<div class ="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar.php?Id=<?php echo $_GET['Id']; ?>"method="POST">

                    <div class="form-group">
                        <input type="text" name="nombres" value="<?php echo $nombres; ?>"
                        class="form-control" placeholder="Actualizar Nombres">
                    </div>

                    <div class="form-group">
                        <input type="text" name="apellidos" value="<?php echo $apellidos; ?>"
                        class="form-control" placeholder="Actualizar Apellido">
                    </div>

                    <div class="form-group">
                        <input type="text" name="telefono" value="<?php echo $telefono; ?>"
                        class="form-control" placeholder="Actualizar Telefono">
                    </div>

                    <div class="form-group">
                        <input type="text" name="direccion" value="<?php echo $direccion; ?>"
                        class="form-control" placeholder="Actualizar Direccion">
                    </div>

                    <div class="form-group">
                        <textarea name="correo_electronico" rows="2" class="form-control" placeholder="Actualizar
                        correo"> <?php echo $correo_electronico; ?></textarea>

                    </div>
                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>    
                </form>

            </div>

        </div>

    </div>

</div>
<?php include("includes/footer.php")?>
