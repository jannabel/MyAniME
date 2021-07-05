<?php
error_reporting(0);
$host= "myanime.mysql.database.azure.com";
$user = "Jannabel@myanime";
$password = "Hannah27";
$db= "personajesanime";
$table = "personajes";

$conexion = mysqli_connect($host, $user, $password, $db);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}else{
  
}

// mysqli_close($conn);
?>