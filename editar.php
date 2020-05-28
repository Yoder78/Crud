<?php
    include("conexion.php");
    if(isset($_GET['Id'])){
        $id = $_GET['Id'];
        $query = "SELECT * FROM clientes WHERE Id =$Id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $Id = $_row['Id'];
            $nombres = $row['nombres'];
            $apellidos = $row['apellidos'];
            $telefono = $row['telefono'];
            $direccion = $row['direccion'];
            $correo_electronico = $row['correo_electronico'];
    
        }
    }
    if(isset($_POST['update'])){
        
        $Id = $_POST['Id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $correo_electronico = $_POST['correo_electronico'];
        
        $query = "UPDATE clientes set nombres = '$nombres', apellidos = '$apellidos', telefono = '$telefono',
        direccion = '$direccion', correo_electronico = '$correo_electronico' WHERE Id = $Id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Dato Actualizado Correctamente';
        $_SESSION['message_type']="danger";
        header("Location: crud.php");

    }
?>
<?php include("includes/header.php")?>
<div class ="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar.php?id=<?php echo $_GET['id']; ?>"method="POST">
                    <div class="form-group">
                        <input type="text" name="nombres" value="<?php echo $nombres; ?>"
                        class="form-control" placeholder="Actualizar Nombres">
                    </div>

                    <div class="form-group">
                        <input type="text" name="apellidos" value="<?php echo $apelliods; ?>"
                        class="form-control" placeholder="Actualizar Apellidos">
                    </div>

                    <div class="form-group">
                        <input type="text" name="nombres" value="<?php echo $; ?>"
                        class="form-control" placeholder="Update Title">
                    </div>




                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Update 
                        Description"> <?php echo $description; ?></textarea>

                    </div>
                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>    
                </form>

            </div>

        </div>

    </div>

</div>
