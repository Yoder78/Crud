<?php
include ("conexion.php");

if (isset($_POST['Guardar'])){
    $Id = $_POST['Id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $correo_electronico = $_POST['correo_electronico'];

    $query = "INSERT INTO clientes(Id, nombres, apellidos, telefono, direccion,
     correo_electronico)VALUES('$Id', '$nombres','$apellidos','$telefono','$direccion','$correo_electronico')";
    $resultado = mysqli_query($conn, $query);

   

    if(!$resultado){
        die("Peticion Fallida");

    }
    $_SESSION['message']= 'Guardado Satisfactorio';
    $_SESSION['message_type']='success';
    
    header("Location: index.php");
}
?>