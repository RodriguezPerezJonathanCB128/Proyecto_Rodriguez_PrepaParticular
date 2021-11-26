<?php

include("conexion.php");
$con=conectar();

$num_control=$_GET['id'];

$sql="DELETE FROM `alumno` WHERE Num_Control='$num_control'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
