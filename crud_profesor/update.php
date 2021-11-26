<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['Nombre'];
$apellidos=$_POST['Apellidos'];
$idprofesor=$_POST['IdProfesor'];
$email=$_POST['E-Mail'];
$especialidad_del_profesor=$_POST['Especialidad_del_profesor'];
$direccion_del_profesor=$_POST['Direccion_del_profesor'];
$num_telefono=$_POST['Num_telefono'];

$sql="UPDATE profesor SET `Nombre`='$nombre', `Apellidos`='$apellidos', `E-Mail`='$email', `Especialidad_del_profesor`='$especialidad_del_profesor', `Direccion_del_profesor`='$direccion_del_profesor', `Num_Telefono`='$num_telefono' WHERE `IdProfesor`='$idprofesor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: profesor.php");
    }
?>