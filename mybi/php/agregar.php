<?php
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$contrasena=$_POST["contrasena"];

require_once("../data/database.php");

$sql = "INSERT INTO usuarios(nombre,correo,contrasena) 
                    values('$nombre','$correo','$contrasena')";
$result=$link->query($sql);

if($result == 1){
    echo "Se ingreso correctamente";
    header ("location: http://localhost/mybi/login.html");
}else{
    echo "error";
}