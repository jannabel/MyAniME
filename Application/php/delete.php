<?php
error_reporting(0);
Delete();

function Delete(){
    require('conexion.php');    

    $id=$_GET["id"];

    $delete = "DELETE  FROM $table WHERE id=$id";
    if($conexion->query($delete)) Header("Location:../index.php");
    else echo "ERROR " . $delete . "<br>" . $conexion->error;
}
?>