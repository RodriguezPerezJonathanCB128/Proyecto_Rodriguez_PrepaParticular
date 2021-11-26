<?php

include("conexion.php");
$con=conectar();

$promedio=$_GET['id'];

$sql="DELETE FROM `calificacion` WHERE Promedio='$promedio'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: calificaciones.php");
    }
?>
