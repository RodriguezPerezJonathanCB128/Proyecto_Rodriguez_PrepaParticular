<?php

include("conexion.php");
$con=conectar();

$num_control=$_POST['Num_Control'];
$nombre=$_POST['Nombre'];
$apellidos=$_POST['Apellidos'];
$email=$_POST['E-Mail'];
$semestre=$_POST['Semestre'];
$especialidad=$_POST['Especialidad'];
$num_telefono=$_POST['Num_Telefono'];

$sql="UPDATE alumno SET `Nombre`='$nombre', `Apellidos`='$apellidos', `E-Mail`='$email', `Semestre`='$semestre', `Especialidad`='$especialidad', `Num_Telefono`='$num_telefono' WHERE `Num_Control`='$num_control'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>