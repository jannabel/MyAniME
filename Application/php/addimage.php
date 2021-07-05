<?php

if(!empty($_FILES['avatar']['name'])){
$info = pathinfo($_FILES['avatar']['name']);
$avatar = "avatar" ."/". $_POST["Cedula"].".".$info['extension'];
copy($_FILES['avatar']['tmp_name'],$avatar); 
$_POST["img"] = $avatar;
}
?>