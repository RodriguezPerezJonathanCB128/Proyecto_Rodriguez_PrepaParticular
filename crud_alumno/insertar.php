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

$sql="INSERT INTO `alumno`(`Num_Control`, `Nombre`, `Apellidos`, `E-Mail`, `Semestre`, `Especialidad`, `Num_Telefono`) VALUES ('$num_control','$nombre','$apellidos','$email','$semestre','$especialidad','$num_telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>