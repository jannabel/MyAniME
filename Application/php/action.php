<?php
error_reporting(0);
require('conexion.php');
include('addimage.php');

if($_POST["id"]==""){
    Save();
}else{
    Update();
}

function Save()
{

    require('conexion.php');
    include('addimage.php');

    if($_POST['img']=="")
    {
        $_POST['img']="avatar/default.jpg";
    }
    
    $save = "INSERT INTO $table VALUES ('$_POST[Nombre]','$_POST[Apellido]','$_POST[Cedula]','$_POST[Nacionalidad]','$_POST[Raza]','$_POST[Ocupacion]','$_POST[Sexo]', '$_POST[Fecha_Nacimiento]', '$_POST[Poder]','$_POST[Serie]','$_POST[Estado]', '$_POST[Biografia]', '$_POST[img]','' )";

    if ($conexion->query($save))Header("Location:../index.php");
    else echo "ERROR " . $save . "<br>" . $conexion->error;
}

function Update()
{ 
    require('conexion.php');
    include('addimage.php');
    $id=$_POST["id"];
    if(!empty($_POST['img'])){  
    
    $update = "UPDATE $table SET Nombre = '$_POST[Nombre]', Apellido ='$_POST[Apellido]', Cedula= '$_POST[Cedula]', Nacionalidad='$_POST[Nacionalidad]',Raza='$_POST[Raza]',Ocupacion='$_POST[Ocupacion]',Sexo='$_POST[Sexo]', Fecha_Nacimiento= '$_POST[Fecha_Nacimiento]', Poder= '$_POST[Poder]', Serie= '$_POST[Serie]', Estado= '$_POST[Estado]', Biografía= '$_POST[Biografia]', img='$_POST[img]' WHERE id ='$id' ";

    if($conexion->query($update))Header("Location:../index.php");
    else echo "ERROR " . $update . "<br>" . $conexion->error;
    }else{

    $update = "UPDATE $table SET Nombre = '$_POST[Nombre]', Apellido ='$_POST[Apellido]', Cedula= '$_POST[Cedula]', Nacionalidad='$_POST[Nacionalidad]',Raza='$_POST[Raza]',Ocupacion='$_POST[Ocupacion]',Sexo='$_POST[Sexo]', Fecha_Nacimiento= '$_POST[Fecha_Nacimiento]', Poder= '$_POST[Poder]', Serie= '$_POST[Serie]', Estado= '$_POST[Estado]', Biografía= '$_POST[Biografia]' WHERE id ='$id' ";

    if($conexion->query($update))Header("Location:../index.php");
    else echo "ERROR " . $update . "<br>" . $conexion->error;
    }

}

mysqli_close($conexion);
?>