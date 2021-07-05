<?php
    error_reporting(0);
    require('conexion.php');    
    $id=$_GET["id"];
    $query = "SELECT * FROM $table Where id= '$id'";

    if ($conexion->query($query)) $row = mysqli_fetch_assoc($conexion->query($query));
    else echo "ERROR " . $query . "<br>" . $conexion->error;

    mysqli_close($conexion);
?>