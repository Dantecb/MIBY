<?php
$id2=$_POST["id_usuario"];
$tipo=$_POST["tipo"];
$mon=$_POST["monto"];
$fech=$_POST["fecha"];


require_once("../data/database.php");

$sql = "INSERT INTO transacciones(id_usuario,tipo,monto,fecha) 
                    values('$id2','$tipo','$mon', '$fech')";
                    echo $sql;
$result=$link->query($sql);

if($result == 1){
    echo "Se ingreso correctamente";
}else{
    echo "error";
}