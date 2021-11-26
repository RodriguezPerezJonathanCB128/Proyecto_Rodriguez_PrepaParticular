<?php

include("conexion.php");
$con=conectar();

$idprofesor=$_GET['id'];

$sql="DELETE FROM `profesor` WHERE IdProfesor='$idprofesor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: profesor.php");
    }
?>
