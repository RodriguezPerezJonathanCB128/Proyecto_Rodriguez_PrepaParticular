<?php

include("conexion.php");
$con=conectar();

$idmateria=$_GET['id'];

$sql="DELETE FROM `materias` WHERE IdMateria='$idmateria'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: materia.php");
    }
?>
