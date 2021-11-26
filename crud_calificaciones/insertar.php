<?php
include("conexion.php");
$con=conectar();

$idprofesor=$_POST['IdProfesor'];
$num_control_alumno=$_POST['Num_Control_Alumno'];
$calif_unidad_i=$_POST['Calif_Unidad_I'];
$calif_unidad_ii=$_POST['Calif_Unidad_II'];
$calif_unidad_iii=$_POST['Calif_Unidad_III'];
$promedio=$_POST['Promedio'];
$idmateria=$_POST['IdMateria'];

$sql="INSERT INTO `calificacion`(`IdProfesor`, `Num_Control_Alumno`, `Calif_Unidad_I`, `Calif_Unidad_II`, `Calif_Unidad_III`, `Promedio`, `IdMateria`) VALUES ('$idprofesor','$num_control_alumno','$calif_unidad_i','$calif_unidad_ii','$calif_unidad_iii','$promedio','$idmateria')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: calificaciones.php");
    
}else {
}
?>