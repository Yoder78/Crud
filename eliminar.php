<?php
include("conexion.php");

if (isset($_GET['Id'])){
    $Id = $_GET['Id'];
    $query = "DELETE FROM clientes WHERE Id = $Id";
    $result=mysqli_query($conn, $query);
    if (!$result){
        die("Falladido");

    }

    $_SESSION['message']='Se a Eliminado';
    $_SESSION['message_type']= 'danger';
    header("Location: index.php");
}