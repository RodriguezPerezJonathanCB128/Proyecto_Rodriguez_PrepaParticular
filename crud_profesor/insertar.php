<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['Nombre'];
$apellidos=$_POST['Apellidos'];
$idprofesor=$_POST['IdProfesor'];
$email=$_POST['E-Mail'];
$especialidad_del_profesor=$_POST['Especialidad_del_profesor'];
$direccion_del_profesor=$_POST['Direccion_del_profesor'];
$num_telefono=$_POST['Num_Telefono'];

$sql="INSERT INTO `profesor`(`Nombre`, `Apellidos`, `IdProfesor`, `E-Mail`, `Especialidad_del_profesor`, `Direccion_del_profesor`, `Num_Telefono`) VALUES ('$nombre','$apellidos','$idprofesor','$email','$especialidad_del_profesor','$direccion_del_profesor','$num_telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: profesor.php");
    
}else {
}
?>